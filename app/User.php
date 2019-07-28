<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\HasUuid;

class User extends Authenticatable
{
    use Notifiable, HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'uuid' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the Profile for the User.
     */
    public function profile()
    {
        return $this->hasOne(\App\Profile::class);
    }


    /**
     * Get the Vendors for the User.
     */
    public function vendors()
    {
        return $this->hasMany(\App\Vendor::class);
    }


    /**
     * Get the Subscriptions for the User.
     */
    public function subscriptions()
    {
        return $this->hasMany(\App\Subscription::class);
    }


    /**
     * Get the Carts for the User.
     */
    public function carts()
    {
        return $this->hasMany(\App\Cart::class);
    }


    /**
     * Get the Invoices for the User.
     */
    public function invoices()
    {
        return $this->hasMany(\App\Invoice::class);
    }


    /**
     * Get the ShippingAddresses for the User.
     */
    public function shippingAddresses()
    {
        return $this->hasMany(\App\ShippingAddress::class);
    }


    /**
     * Get the Orders for the User.
     */
    public function orders()
    {
        return $this->hasMany(\App\Order::class);
    }


    /**
     * Get the PaymentMethods for the User.
     */
    public function paymentMethods()
    {
        return $this->hasMany(\App\PaymentMethod::class);
    }


    /**
     * Get the Roles for the User.
     */
    public function roles()
    {
        return $this->belongsToMany(\App\Role::class);
    }

    /**
     * Get the Coupons for the User.
     */
    public function coupons()
    {
        return $this->belongsToMany(\App\Coupon::class);
    }

}
