<?php

namespace App\Models;

use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes,
    HasTags,
    HasTranslations;

    public $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'id',
        'title',
        'description',
        'tumbnail_image',
        'image',
        'status',
        'highlight',
        'weight',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function links()
    {
        return $this->belongsToMany('App\Models\Link', 'links_projects');
    }
}
