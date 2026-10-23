<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    protected $table = 'media';

    protected $fillable = ['file_path', 'alt_text', 'title', 'width', 'height', 'size', 'mime'];

    /** placeholder URL, resolved to the site address when a page is rendered */
    public function url(): string
    {
        return '%%BASE%%/'.$this->file_path;
    }
}
