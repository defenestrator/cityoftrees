<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\Payment
 *
 * @property int $id
 * @property string $uuid
 * @property int $payment_method_id
 * @property int $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Invoice[] $invoices
 * @property-read \Cot\PaymentMethod $paymentMethod
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Payment whereUuid($value)
 * @mixin \Eloquent
 */
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
        return $this->hasOne(\Cot\PaymentMethod::class);
    }


    /**
     * Get the Invoices for the Payment.
     */
    public function invoices()
    {
        return $this->belongsToMany(\Cot\Invoice::class);
    }

}
