<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Review extends Model
{
    protected $fillable = [
        'order_id', 'product_id', 'user_id','rating','review',
    ];
}
