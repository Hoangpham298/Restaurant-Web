<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name', 'slug', 'create_at', 'image'

    ];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Product');;


    }
}
