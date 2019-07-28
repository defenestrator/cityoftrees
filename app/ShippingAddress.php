<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class ShippingAddress extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'ship_to_name', 'country', 'street_address', 'unit_number', 'city', 'state', 'postal_code', 'lat', 'lng'
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
        'ship_to_name' => 'string',
        'country' => 'string',
        'street_address' => 'string',
        'unit_number' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'lat' => 'float',
        'lng' => 'float',
                'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the Subscriptions for the ShippingAddress.
     */
    public function subscriptions()
    {
        return $this->hasMany(\App\Subscription::class);
    }


    /**
     * Get the User for the ShippingAddress.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

}
