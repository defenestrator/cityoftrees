<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Profile extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'image_id', 'screen_name', 'title', 'first_name', 'last_name', 'phone', 'facebook', 'instagram', 'twitter', 'snapchat', 'thcfarmer', 'rollitup', 'four20mag', 'leafly', 'strainly'
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
        'screen_name' => 'string',
        'title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'twitter' => 'string',
        'snapchat' => 'string',
        'thcfarmer' => 'string',
        'rollitup' => 'string',
        'four20mag' => 'string',
        'leafly' => 'string',
        'strainly' => 'string',
                'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the User for the Profile.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

}
