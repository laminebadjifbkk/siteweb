<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Domaine;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $counts = [
            'total'    => Article::count(),
            'published' => Article::where('status', 'published')->count(),
            'review'   => Article::where('status', 'review')->count(),
            'domaines' => Domaine::count(),
        ];

        $domaines = Domaine::withCount('articles')->get();

        $articles = Article::with(['domaine', 'user'])
            ->latest()
            ->limit(50)
            ->get();

        return view('admin.dashboard', compact('counts', 'domaines', 'articles'));
    }
}
