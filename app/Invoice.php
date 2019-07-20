<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'subscription_id', 'subtotal', 'tax', 'shipping', 'discount', 'total'
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
     * Get the Orders for the Invoice.
     */
    public function orders()
    {
        return $this->hasMany(\App\Order::class);
    }


    /**
     * Get the User for the Invoice.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }


    /**
     * Get the Subscription for the Invoice.
     */
    public function subscription()
    {
        return $this->belongsTo(\App\Subscription::class);
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

}
