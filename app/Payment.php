<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'payment_method_type_user_id', 'amount'
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
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the payment_method_type_user for the Payment.
     */
    public function paymentMethodTypeUser()
    {
        return $this->hasOne(\App\payment_method_type_user::class);
    }


    /**
     * Get the Invoices for the Payment.
     */
    public function invoices()
    {
        return $this->belongsToMany(\App\Invoice::class);
    }

}
