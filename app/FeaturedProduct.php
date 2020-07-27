<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedProduct extends Model
{
    //
    protected $guarded = [];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
