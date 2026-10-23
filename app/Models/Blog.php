<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasSeo, SoftDeletes;

    protected $fillable = [
        'slug', 'title', 'excerpt', 'content', 'featured_image', 'featured_image_alt',
        'category_id', 'status', 'published_at', 'layout',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'layout' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
