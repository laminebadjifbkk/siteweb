<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use SoftDeletes, HasTranslations;

    protected $fillable = [
        'user_id', 'domaine_id', 'title', 'slug', 'excerpt', 'body',
        'meta_title', 'meta_description', 'image_alt', 'featured_image',
        'status', 'published_at', 'visibility', 'password',
        'featured', 'comments_enabled', 'seo_index', 'source_url',
    ];

    public array $translatable = [
        'title', 'slug', 'excerpt', 'body', 'meta_title', 'meta_description', 'image_alt',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'featured' => 'boolean',
        'comments_enabled' => 'boolean',
        'seo_index' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->where('published_at', '<=', now());
    }

    /** Trouve un article par son slug, dans une langue donnée. */
    public static function findBySlug(string $slug, string $locale)
    {
        return static::where("slug->{$locale}", $slug)->first();
    }
}
