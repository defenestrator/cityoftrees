<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

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
        return $this->hasMany(\App\Product::class);
    }

}
