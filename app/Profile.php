<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'facebook', 'instagram', 'twitter', 'snapchat', 'thcfarmer', 'rollitup', '420mag', 'leafly', 'strainly'
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
        'facebook' => 'string',
        'instagram' => 'string',
        'twitter' => 'string',
        'snapchat' => 'string',
        'thcfarmer' => 'string',
        'rollitup' => 'string',
        '420mag' => 'string',
        'leafly' => 'string',
        'strainly' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the User for the Profile.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

}