<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= [
        'product_id',
        'product_name',
        'product_price',
        'product_des',
        'product_image',
        

    ];
}
