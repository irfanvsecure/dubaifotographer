<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphOne;

/** Pages and blog posts: one seo_meta row each, and a public URL path. */
trait HasSeo
{
    /** A published page or post whose slug changes keeps its old URL as a 301 to the new one. */
    protected static function bootHasSeo(): void
    {
        static::updating(function ($model) {
            if (! $model->isDirty('slug') || $model->getOriginal('status') !== 'published') {
                return;
            }
            $oldSlug = (string) $model->getOriginal('slug');
            $oldPath = $oldSlug === '' ? '/' : '/'.$oldSlug.'/';
            $newPath = $model->path();

            Redirect::query()->updateOrCreate(
                ['from_path' => Redirect::normalize($oldSlug)],
                ['to_url' => $newPath, 'status_code' => 301, 'is_active' => true]
            );
            // older redirects to the old URL now go straight to the new one (no chains)
            Redirect::query()->where('to_url', $oldPath)->update(['to_url' => $newPath]);
        });
    }

    public function seo(): MorphOne
    {
        return $this->morphOne(SeoMeta::class, 'seoable');
    }

    /** "/about-us/" ("/" for the home page) */
    public function path(): string
    {
        return $this->slug === '' ? '/' : '/'.$this->slug.'/';
    }

    public function isPublished(): bool
    {
        return $this->status === 'published';
    }
}
