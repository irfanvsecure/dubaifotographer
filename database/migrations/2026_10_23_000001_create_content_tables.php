<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Site content: pages, blog posts, categories/tags and their SEO meta.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug', 191)->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug', 191)->unique();
            $table->timestamps();
        });

        // slug is the URL path without slashes ("about-us", "locations/photographer-in-ajman"; "" = home).
        // template: a Blade view in resources/views/pages (design lives there), or "page" for a plain
        // text page whose body is `content`.
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('pages')->nullOnDelete();
            $table->string('slug', 191)->unique();
            $table->string('title');
            $table->text('h1')->nullable();
            $table->longText('content')->nullable();
            $table->string('status', 20)->default('draft')->index();
            $table->string('template', 191)->default('page');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        // layout: options for the article template (variant, author, date, toc, prev/next, featured media…)
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 191)->unique();
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('featured_image')->nullable();
            $table->string('featured_image_alt')->nullable();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('status', 20)->default('draft')->index();
            $table->timestamp('published_at')->nullable()->index();
            $table->json('layout')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('blog_tag', function (Blueprint $table) {
            $table->foreignId('blog_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
            $table->primary(['blog_id', 'tag_id']);
        });

        Schema::create('seo_meta', function (Blueprint $table) {
            $table->id();
            $table->morphs('seoable');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('robots')->default('index, follow');
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->longText('schema_json')->nullable();
            $table->string('focus_keyword')->nullable();
            $table->timestamps();
            $table->unique(['seoable_type', 'seoable_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seo_meta');
        Schema::dropIfExists('blog_tag');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('categories');
    }
};
