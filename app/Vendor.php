<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Dyrynda\Database\Casts\EfficientUuid;
use Dyrynda\Database\Support\GeneratesUuid;

/**
 * Cot\Vendor
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property string $name
 * @property string|null $phone
 * @property string|null $contact_email
 * @property string|null $country
 * @property string|null $street_address
 * @property string|null $unit_number
 * @property string|null $city
 * @property string|null $state
 * @property string|null $postal_code
 * @property float|null $lat
 * @property float|null $lng
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Product[] $products
 * @property-read \Cot\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereUnitNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Vendor whereUuid($value)
 * @mixin \Eloquent
 */
class Vendor extends Model
{
    use GeneratesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'user_id', 'name', 'phone', 'contact_email', 'country', 'street_address', 'unit_number', 'city', 'state', 'postal_code', 'lat', 'lng'
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
        'uuid' => EfficientUuid::class,
        'name' => 'string',
        'phone' => 'string',
        'contact_email' => 'string',
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
     * Get the Products for the Vendor.
     */
    public function products()
    {
        return $this->hasMany(\Cot\Product::class);
    }


    /**
     * Get the User for the Vendor.
     */
    public function user()
    {
        return $this->belongsTo(\Cot\User::class);
    }

}
