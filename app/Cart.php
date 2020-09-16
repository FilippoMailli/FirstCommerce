<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'total_cart',
        'expires',
        'paid',

    ];

    public function order()
    {
        return $this->hasOne('App\Order');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function order()
    {
        return $this->hasOne('App\Order');
    }
}
