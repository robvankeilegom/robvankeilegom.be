<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

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
        return $this->belongsToMany('App\Link', 'links_projects');
    }
}
