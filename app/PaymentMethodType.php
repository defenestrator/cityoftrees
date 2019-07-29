<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\PaymentMethodType
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $receiving_account
 * @property bool|null $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType whereReceivingAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\PaymentMethodType whereUuid($value)
 * @mixin \Eloquent
 */
class PaymentMethodType extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'receiving_account', 'active'
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
        'receiving_account' => 'string',
        'active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
