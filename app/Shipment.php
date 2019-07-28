<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

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
        return $this->belongsToMany(\App\Order::class);
    }

}
