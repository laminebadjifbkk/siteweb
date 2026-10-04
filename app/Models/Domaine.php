<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Domaine extends Model
{
    use HasTranslations;

    protected $fillable = ['slug', 'name'];
    public array $translatable = ['name'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
