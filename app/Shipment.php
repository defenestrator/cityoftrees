<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\Shipment
 *
 * @property int $id
 * @property string $uuid
 * @property int $shipping_method_id
 * @property int|null $shipped_on_date
 * @property int|null $received_on_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Order[] $orders
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment whereReceivedOnDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment whereShippedOnDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment whereShippingMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Shipment whereUuid($value)
 * @mixin \Eloquent
 */
class Shipment extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shipping_method_id', 'shipped_on_date', 'received_on_date'
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
        'shipped_on_date' => 'timestamp',
        'received_on_date' => 'timestamp',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the Orders for the Shipment.
     */
    public function orders()
    {
        return $this->belongsToMany(\Cot\Order::class);
    }

}
