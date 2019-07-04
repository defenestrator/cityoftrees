<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
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
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
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
