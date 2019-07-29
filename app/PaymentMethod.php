<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\PaymentMethod
 *
 * @property int $id
 * @property string $uuid
 * @property int $payment_method_type_id
 * @property int $user_id
 * @property string|null $nickname
 * @property string|null $account
 * @property \Illuminate\Support\Carbon|null $expires
 * @property string|null $secret
 * @property string|null $postcode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Cot\PaymentMethodType $paymentMethodType
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Payment[] $payments
 * @property-read \Cot\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod wherePaymentMethodTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethod whereUuid($value)
 * @mixin \Eloquent
 */
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
        return $this->hasOne(\Cot\PaymentMethodType::class);
    }


    /**
     * Get the Payments for the PaymentMethod.
     */
    public function payments()
    {
        return $this->hasMany(\Cot\Payment::class);
    }


    /**
     * Get the User for the PaymentMethod.
     */
    public function user()
    {
        return $this->belongsTo(\Cot\User::class);
    }

}
