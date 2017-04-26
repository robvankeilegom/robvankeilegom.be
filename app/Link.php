<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'icon',
        'href',
        'target_blank',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
