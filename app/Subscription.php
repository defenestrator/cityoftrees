<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shipping_address_id', 'frequency', 'active'
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
        'frequency' => 'string',
        'active' => 'boolean',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the ShippingAddress for the Subscription.
     */
    public function shippingAddress()
    {
        return $this->belongsTo(\App\ShippingAddress::class);
    }


    /**
     * Get the Products for the Subscription.
     */
    public function products()
    {
        return $this->belongsToMany(\App\Product::class);
    }

    /**
     * Get the Invoices for the Subscription.
     */
    public function invoices()
    {
        return $this->belongsToMany(\App\Invoice::class);
    }

}
