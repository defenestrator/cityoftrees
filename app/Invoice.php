<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\Invoice
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $user_id
 * @property int $subtotal
 * @property int|null $tax
 * @property int|null $shipping
 * @property int|null $discount
 * @property int $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Payment[] $payments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Product[] $products
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Subscription[] $subscriptions
 * @property-read \Cot\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Invoice whereUuid($value)
 * @mixin \Eloquent
 */
class Invoice extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'subtotal', 'tax', 'shipping', 'discount', 'total'
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
     * Get the User for the Invoice.
     */
    public function user()
    {
        return $this->belongsTo(\Cot\User::class);
    }


    /**
     * Get the Products for the Invoice.
     */
    public function products()
    {
        return $this->belongsToMany(\Cot\Product::class);
    }

    /**
     * Get the Payments for the Invoice.
     */
    public function payments()
    {
        return $this->belongsToMany(\Cot\Payment::class);
    }

    /**
     * Get the Subscriptions for the Invoice.
     */
    public function subscriptions()
    {
        return $this->belongsToMany(\Cot\Subscription::class);
    }

}
