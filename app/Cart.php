<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Cot\Traits\HasUuid;

/**
 * Cot\Cart
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\Product[] $products
 * @property-read \Cot\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Cart whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Cart whereUuid($value)
 * @mixin \Eloquent
 */
class Cart extends Model
{
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
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
     * Get the User for the Cart.
     */
    public function user()
    {
        return $this->belongsTo(\Cot\User::class);
    }


    /**
     * Get the Products for the Cart.
     */
    public function products()
    {
        return $this->belongsToMany(\Cot\Product::class);
    }

}
