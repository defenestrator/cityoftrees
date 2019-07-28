<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Product extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'manufacturer_id', 'vendor_id', 'name', 'description', 'height', 'width', 'depth', 'weight', 'volume', 'contents', 'price'
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
                'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

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
