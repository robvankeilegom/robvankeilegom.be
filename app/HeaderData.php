<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeaderData extends Model
{
    use SoftDeletes;

    protected $table = 'header_data';

    protected $fillable = [
        'title',
        'description',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function links()
    {
        return $this->belongsToMany('App\Link', 'header_data_links');
    }
}
