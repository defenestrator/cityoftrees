<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class PaymentMethod extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid','payment_method_type_id', 'user_id', 'nickname', 'account', 'expires', 'secret', 'postcode'
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
        'nickname' => 'string',
        'account' => 'string',
        'expires' => 'datetime',
        'secret' => 'string',
        'postcode' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the PaymentMethodType for the PaymentMethod.
     */
    public function paymentMethodType()
    {
        return $this->hasOne(\App\PaymentMethodType::class);
    }


    /**
     * Get the Payments for the PaymentMethod.
     */
    public function payments()
    {
        return $this->hasMany(\App\Payment::class);
    }


    /**
     * Get the User for the PaymentMethod.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

}
