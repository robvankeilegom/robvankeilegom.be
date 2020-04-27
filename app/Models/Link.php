<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'icon',
        'href',
        'target',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
