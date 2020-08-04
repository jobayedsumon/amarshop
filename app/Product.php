<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Product extends Model
{
    //
    protected $guarded = [];
    use LogsActivity;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function specifications()
    {
        return $this->hasOne(ProductSpecification::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_color');
    }

}
