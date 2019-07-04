<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'country', 'street_address', 'unit_number', 'city', 'state', 'postal_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'uuid' => 'string',
        'name' => 'string',
        'country' => 'string',
        'street_address' => 'string',
        'unit_number' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Subscriptions for the ShippingAddress.
     */
    public function subscriptions()
    {
        return $this->hasMany(\App\Subscription::class);
    }


    /**
     * Get the Users for the ShippingAddress.
     */
    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

}
