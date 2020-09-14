<?php

namespace App\Model\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];
    public function hasManyTiket(){
        return $this->hasMany('App\Model\Tiket\Tiket', 'id_category', 'id');
    }
}
