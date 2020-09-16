<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'discount',
        'total',
    ];

    public function carts()
    {
        return $this->belongsToMany('App\Cart');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
