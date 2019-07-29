<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\ShippingAddress
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $user_id
 * @property string $ship_to_name
 * @property string $country
 * @property string $street_address
 * @property string|null $unit_number
 * @property string|null $city
 * @property string|null $state
 * @property string|null $postal_code
 * @property float|null $lat
 * @property float|null $lng
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Subscription[] $subscriptions
 * @property-read \Cot\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereShipToName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereUnitNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\ShippingAddress whereUuid($value)
 * @mixin \Eloquent
 */
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
        return $this->hasMany(\Cot\Subscription::class);
    }


    /**
     * Get the User for the ShippingAddress.
     */
    public function user()
    {
        return $this->belongsTo(\Cot\User::class);
    }

}
