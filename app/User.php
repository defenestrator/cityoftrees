<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'screen_name', 'email', 'password'
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
        'first_name' => 'string',
        'last_name' => 'string',
        'screen_name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Profiles for the User.
     */
    public function profiles()
    {
        return $this->hasMany(\App\Profile::class);
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
     * Get the Roles for the User.
     */
    public function roles()
    {
        return $this->belongsToMany(\App\Role::class);
    }

    /**
     * Get the ShippingAddresses for the User.
     */
    public function shippingAddresses()
    {
        return $this->belongsToMany(\App\ShippingAddress::class);
    }

    /**
     * Get the PaymentMethodTypes for the User.
     */
    public function paymentMethodTypes()
    {
        return $this->belongsToMany(\App\PaymentMethodType::class);
    }

    /**
     * Get the Coupons for the User.
     */
    public function coupons()
    {
        return $this->belongsToMany(\App\Coupon::class);
    }

}