<?php

namespace Cot;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cot\Traits\HasUuid;

/**
 * Cot\User
 *
 * @property int $id
 * @property string $uuid
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Cart[] $carts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Coupon[] $coupons
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Invoice[] $invoices
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Order[] $orders
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\PaymentMethod[] $paymentMethods
 * @property-read \Cot\Profile $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\ShippingAddress[] $shippingAddresses
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Subscription[] $subscriptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Vendor[] $vendors
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\User whereUuid($value)
 * @mixin \Eloquent
 */
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
        return $this->hasOne(\Cot\Profile::class);
    }


    /**
     * Get the Vendors for the User.
     */
    public function vendors()
    {
        return $this->hasMany(\Cot\Vendor::class);
    }


    /**
     * Get the Subscriptions for the User.
     */
    public function subscriptions()
    {
        return $this->hasMany(\Cot\Subscription::class);
    }


    /**
     * Get the Carts for the User.
     */
    public function carts()
    {
        return $this->hasMany(\Cot\Cart::class);
    }


    /**
     * Get the Invoices for the User.
     */
    public function invoices()
    {
        return $this->hasMany(\Cot\Invoice::class);
    }


    /**
     * Get the ShippingAddresses for the User.
     */
    public function shippingAddresses()
    {
        return $this->hasMany(\Cot\ShippingAddress::class);
    }


    /**
     * Get the Orders for the User.
     */
    public function orders()
    {
        return $this->hasMany(\Cot\Order::class);
    }


    /**
     * Get the PaymentMethods for the User.
     */
    public function paymentMethods()
    {
        return $this->hasMany(\Cot\PaymentMethod::class);
    }


    /**
     * Get the Roles for the User.
     */
    public function roles()
    {
        return $this->belongsToMany(\Cot\Role::class);
    }

    /**
     * Get the Coupons for the User.
     */
    public function coupons()
    {
        return $this->belongsToMany(\Cot\Coupon::class);
    }

}
