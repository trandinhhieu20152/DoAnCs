<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Guard;

class Category extends Model
{
    protected $guarded=[];
    public function Products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
