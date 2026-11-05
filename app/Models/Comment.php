<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/** A visitor's comment on a blog post. Hidden until approved (MCP: moderate_comment). */
class Comment extends Model
{
    protected $fillable = ['blog_id', 'author', 'email', 'body', 'status'];

    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

    public function scopeApproved(Builder $query): void
    {
        $query->where('status', 'approved');
    }
}
