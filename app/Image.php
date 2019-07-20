<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imageable_id', 'imageable_type', 'large', 'medium', 'small', 'square', 'original'
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
        'imageable_type' => 'string',
        'large' => 'string',
        'medium' => 'string',
        'small' => 'string',
        'square' => 'string',
        'original' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];
}
