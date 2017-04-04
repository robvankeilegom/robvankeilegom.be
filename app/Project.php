<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use SoftDeletes,
    HasTags;

    protected $fillable = [
        'title',
        'description',
        'tumbnail_image',
        'image',
        'source_link',
        'live_link',
        'status',
    ];

    protected $dates = ['deleted_at'];
}
