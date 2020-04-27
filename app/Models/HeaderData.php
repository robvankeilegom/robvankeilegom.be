<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeaderData extends Model
{
    use SoftDeletes,
    HasTranslations;

    public $translatable = [
        'description1',
        'description2',
    ];

    protected $table = 'header_data';

    protected $fillable = [
        'code',
        'image',
        'subtitle',
        'description1',
        'description2',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function links()
    {
        return $this->belongsToMany('App\Models\Link', 'header_data_links');
    }
}
