<?php

namespace App;

use Actuallymab\LaravelComment\CanComment;
use App\Notifications\CustomPasswordResetNotification;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class Customer extends Authenticatable implements CanResetPassword
{
    //
    use Notifiable;
    use CanComment;

    protected $guarded = [];

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomPasswordResetNotification($token));
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }


}
