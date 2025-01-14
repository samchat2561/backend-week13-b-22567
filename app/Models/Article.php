<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use WireComments\Traits\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use Commentable;
    protected $fillable = [
        "title",
        "slug",
        "content",
        "media_id",
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'media_id');
    }
}
