<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'country', 'street_address', 'unit_number', 'city', 'state', 'postal_code'
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
        'country' => 'string',
        'street_address' => 'string',
        'unit_number' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Products for the Vendor.
     */
    public function products()
    {
        return $this->hasMany(\App\Product::class);
    }


    /**
     * Get the User for the Vendor.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

}
