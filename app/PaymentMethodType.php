<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethodType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'receiving_account', 'active'
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
        'type' => 'string',
        'receiving_account' => 'string',
        'active' => 'boolean',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Users for the PaymentMethodType.
     */
    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

}
