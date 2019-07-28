<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'percentage', 'value', 'code', 'expires'
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
        'percentage' => 'boolean',
        'code' => 'string',
        'expires' => 'timestamp',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the Users for the Coupon.
     */
    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

}
