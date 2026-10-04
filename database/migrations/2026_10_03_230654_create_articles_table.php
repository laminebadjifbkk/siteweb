<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('domaine_id')->nullable()->constrained('domaines')->nullOnDelete();

            // Champs traduisibles (français et anglais dans le même champ JSON)
            $table->json('title');
            $table->json('slug');
            $table->json('excerpt')->nullable();
            $table->json('body');
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            $table->json('image_alt')->nullable();

            // Champs communs aux deux langues
            $table->string('featured_image')->nullable();
            $table->string('status', 20)->default('draft'); // draft | review | scheduled | published | archived
            $table->timestamp('published_at')->nullable();
            $table->string('visibility', 20)->default('public'); // public | private | password
            $table->string('password')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('comments_enabled')->default(true);
            $table->boolean('seo_index')->default(true);
            $table->string('source_url')->nullable()->unique(); // ancienne URL Drupal, pour l'import

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
