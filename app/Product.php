<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'manufacturer_id', 'vendor_id', 'name', 'description', 'height', 'width', 'depth', 'price'
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
        'height' => 'integer',
        'width' => 'integer',
        'depth' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the cart_products for the Product.
     */
    public function cartProducts()
    {
        return $this->hasMany(\App\cart_product::class);
    }


    /**
     * Get the Manufacturer for the Product.
     */
    public function manufacturer()
    {
        return $this->belongsTo(\App\Manufacturer::class);
    }


    /**
     * Get the Vendor for the Product.
     */
    public function vendor()
    {
        return $this->belongsTo(\App\Vendor::class);
    }


    /**
     * Get the Subscriptions for the Product.
     */
    public function subscriptions()
    {
        return $this->belongsToMany(\App\Subscription::class);
    }

    /**
     * Get the Carts for the Product.
     */
    public function carts()
    {
        return $this->belongsToMany(\App\Cart::class);
    }

    /**
     * Get the Invoices for the Product.
     */
    public function invoices()
    {
        return $this->belongsToMany(\App\Invoice::class);
    }

}
