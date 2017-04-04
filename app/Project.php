<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'tumbnail_image',
        'image',
        'source_link',
        'live_link',
    ];

    protected $dates = ['deleted_at'];
}
