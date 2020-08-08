<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];

    public function order_details()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
