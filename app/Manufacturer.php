<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\Manufacturer
 *
 * @property int $id
 * @property string $uuid
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
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereUnitNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Manufacturer whereUuid($value)
 * @mixin \Eloquent
 */
class Manufacturer extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'contact_email', 'country', 'street_address', 'unit_number', 'city', 'state', 'postal_code', 'lat', 'lng'
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
     * Get the Products for the Manufacturer.
     */
    public function products()
    {
        return $this->hasMany(\Cot\Product::class);
    }

}
