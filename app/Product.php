<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\Product
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $manufacturer_id
 * @property int|null $vendor_id
 * @property string $name
 * @property string|null $description
 * @property int|null $height
 * @property int|null $width
 * @property int|null $depth
 * @property int|null $weight
 * @property int|null $volume
 * @property int|null $contents
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Cart[] $carts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Invoice[] $invoices
 * @property-read \Cot\Manufacturer|null $manufacturer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Subscription[] $subscriptions
 * @property-read \Cot\Vendor|null $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereVendorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Product whereWidth($value)
 * @mixin \Eloquent
 */
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
        return $this->belongsTo(\Cot\Manufacturer::class);
    }


    /**
     * Get the Vendor for the Product.
     */
    public function vendor()
    {
        return $this->belongsTo(\Cot\Vendor::class);
    }


    /**
     * Get the Subscriptions for the Product.
     */
    public function subscriptions()
    {
        return $this->belongsToMany(\Cot\Subscription::class);
    }

    /**
     * Get the Carts for the Product.
     */
    public function carts()
    {
        return $this->belongsToMany(\Cot\Cart::class);
    }

    /**
     * Get the Invoices for the Product.
     */
    public function invoices()
    {
        return $this->belongsToMany(\Cot\Invoice::class);
    }

}
