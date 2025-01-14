<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use WireComments\Traits\Commentable;

class Article extends Model
{
    use Commentable;
    protected $fillable = [
        "title",
        "slug",
        "content",
        "media_id",
    ];
}
