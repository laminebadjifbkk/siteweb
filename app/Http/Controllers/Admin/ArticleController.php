<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /** Balises autorisées dans le contenu de l'éditeur (le reste est retiré). */
    private const ALLOWED_TAGS = '<p><br><h2><h3><ul><ol><li><blockquote><a><b><strong><i><em><u>';

    public function index(): View
    {
        // Statut en base -> code court utilisé par la vue (onglets, pastilles)
        $statuses = [
            'published' => 'pub',
            'review'    => 'rev',
            'scheduled' => 'sch',
            'draft'     => 'dra',
            'archived'  => 'arc',
        ];

        // Si tes colonnes ou relations portent d'autres noms, tout se règle ici.
        $articles = Article::with(['domaine', 'user'])
            ->latest()
            ->get()
            ->map(fn (Article $a) => [
                'id' => $a->id,
                't'  => $a->title,
                'r'  => $a->domaine->name ?? 'Sans rubrique',
                'a'  => $a->user->name ?? '—',
                's'  => $statuses[$a->status] ?? 'dra',
                'd'  => Carbon::parse($a->publish_at ?? $a->created_at)->format('Y-m-d'),
                'v'  => (int) ($a->views ?? 0),
            ]);

        return view('admin.articles.index', compact('articles'));
    }

    public function create(): View
    {
        return view('admin.articles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title'            => ['required', 'string', 'max:120'],
            'slug'             => ['nullable', 'string', 'max:140'],
            'body'             => ['required_unless:status,draft', 'nullable', 'string'],
            'excerpt'          => ['nullable', 'string', 'max:200'],
            'status'           => ['required', 'in:draft,review,published,scheduled'],
            'date'             => ['required_if:status,scheduled', 'nullable', 'date', 'after_or_equal:today'],
            'time'             => ['nullable', 'date_format:H:i'],
            'visibility'       => ['required', 'in:public,private,password'],
            'password'         => ['required_if:visibility,password', 'nullable', 'string', 'max:100'],
            'category'         => ['nullable', 'string', 'max:100'],
            'tags'             => ['nullable', 'array', 'max:10'],
            'tags.*'           => ['string', 'max:40'],
            'image'            => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'image_alt'        => ['nullable', 'string', 'max:255'],
            'document'         => ['nullable', 'file', 'mimes:pdf,doc,docx,xls,xlsx', 'max:10240'],
            'meta_title'       => ['nullable', 'string', 'max:70'],
            'meta_description' => ['nullable', 'string', 'max:170'],
            'canonical'        => ['nullable', 'url', 'max:255'],
        ]);

        $publishAt = null;
        if ($data['status'] === 'scheduled') {
            $publishAt = Carbon::parse($data['date'] . ' ' . ($data['time'] ?? '09:00'));
            if ($publishAt->isPast()) {
                return back()->withInput()->withErrors(['date' => 'Choisissez une date future.']);
            }
        } elseif ($data['status'] === 'published') {
            $publishAt = now();
        }

        $article = Article::create([
            'user_id'          => $request->user()->id,
            'title'            => $data['title'],
            'slug'             => $this->uniqueSlug($data['slug'] ?: $data['title']),
            'body'             => strip_tags($data['body'] ?? '', self::ALLOWED_TAGS),
            'excerpt'          => $data['excerpt'] ?? null,
            'status'           => $data['status'],
            'publish_at'       => $publishAt,
            'visibility'       => $data['visibility'],
            'password'         => $data['visibility'] === 'password' ? bcrypt($data['password']) : null,
            'featured'         => $request->boolean('featured'),
            'allow_comments'   => $request->boolean('comments'),
            'indexable'        => $request->boolean('index'),
            'image'            => $request->file('image')?->store('articles/images', 'public'),
            'image_alt'        => $data['image_alt'] ?? null,
            'document'         => $request->file('document')?->store('articles/documents', 'public'),
            'meta_title'       => $data['meta_title'] ?? null,
            'meta_description' => $data['meta_description'] ?? null,
            'canonical'        => $data['canonical'] ?? null,
        ]);

        // Mots-clés : à brancher sur ta table de tags si elle existe.
        // Ex. $article->tags()->sync(collect($data['tags'] ?? [])->map(fn ($t) => Tag::firstOrCreate(['name' => $t])->id));

        // Rubrique : $data['category'] contient le libellé choisi.
        // Ex. $article->update(['domaine_id' => Domaine::where('name', $data['category'])->value('id')]);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Article « ' . $article->title . ' » enregistré.');
    }

    /** Slug unique : mon-titre, mon-titre-2, mon-titre-3… */
    private function uniqueSlug(string $source): string
    {
        $base = Str::slug($source) ?: 'article';
        $slug = $base;
        $i = 2;

        while (Article::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }
}
