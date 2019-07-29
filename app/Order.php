<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\Order
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $invoice_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Cot\Invoice|null $invoice
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Shipment[] $shipments
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Order whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Order whereUuid($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoice_id'
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
     * Get the Invoice for the Order.
     */
    public function invoice()
    {
        return $this->belongsTo(\Cot\Invoice::class);
    }


    /**
     * Get the Shipments for the Order.
     */
    public function shipments()
    {
        return $this->belongsToMany(\Cot\Shipment::class);
    }

}
