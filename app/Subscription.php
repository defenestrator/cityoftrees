<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\Subscription
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $shipping_address_id
 * @property string $frequency
 * @property bool|null $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Invoice[] $invoices
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Product[] $products
 * @property-read \Cot\ShippingAddress|null $shippingAddress
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription whereFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription whereShippingAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Subscription whereUuid($value)
 * @mixin \Eloquent
 */
class Subscription extends Model
{
    use HasUuid;

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
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the ShippingAddress for the Subscription.
     */
    public function shippingAddress()
    {
        return $this->belongsTo(\Cot\ShippingAddress::class);
    }


    /**
     * Get the Products for the Subscription.
     */
    public function products()
    {
        return $this->belongsToMany(\Cot\Product::class);
    }

    /**
     * Get the Invoices for the Subscription.
     */
    public function invoices()
    {
        return $this->belongsToMany(\Cot\Invoice::class);
    }

}
