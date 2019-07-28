<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
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
        'name' => 'string',
                'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the Users for the Role.
     */
    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

}
