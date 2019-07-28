<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

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
        return $this->belongsTo(\App\User::class);
    }


    /**
     * Get the Products for the Invoice.
     */
    public function products()
    {
        return $this->belongsToMany(\App\Product::class);
    }

    /**
     * Get the Payments for the Invoice.
     */
    public function payments()
    {
        return $this->belongsToMany(\App\Payment::class);
    }

    /**
     * Get the Subscriptions for the Invoice.
     */
    public function subscriptions()
    {
        return $this->belongsToMany(\App\Subscription::class);
    }

}
