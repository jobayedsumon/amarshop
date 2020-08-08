<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class FeaturedProduct extends Model
{
    //
    protected $guarded = [];
    use LogsActivity;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
