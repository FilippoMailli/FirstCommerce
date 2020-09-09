<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'address',
        'civic_number',
        'city',
        'country',
        'credit_card',
        'cvc',
        'expires',
    ];
}
