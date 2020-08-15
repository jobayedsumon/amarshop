<?php

namespace App;

use Actuallymab\LaravelComment\CanComment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class Customer extends Authenticatable
{
    //
    use Notifiable;
    use CanComment;

    protected $guarded = [];

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
