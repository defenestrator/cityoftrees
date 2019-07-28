<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Payment extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'payment_method_id', 'amount'
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
                'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the PaymentMethod for the Payment.
     */
    public function paymentMethod()
    {
        return $this->hasOne(\App\PaymentMethod::class);
    }


    /**
     * Get the Invoices for the Payment.
     */
    public function invoices()
    {
        return $this->belongsToMany(\App\Invoice::class);
    }

}
