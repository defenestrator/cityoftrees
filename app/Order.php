<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

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
        return $this->belongsTo(\App\Invoice::class);
    }


    /**
     * Get the Shipments for the Order.
     */
    public function shipments()
    {
        return $this->belongsToMany(\App\Shipment::class);
    }

}
