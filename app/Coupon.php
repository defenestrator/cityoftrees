<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;

/**
 * Cot\Coupon
 *
 * @property int $id
 * @property bool|null $percentage
 * @property int $value
 * @property string $code
 * @property int|null $expires
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon whereExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Coupon whereValue($value)
 * @mixin \Eloquent
 */
class Coupon extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'percentage', 'value', 'code', 'expires'
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
        'percentage' => 'boolean',
        'code' => 'string',
        'expires' => 'timestamp',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the Users for the Coupon.
     */
    public function users()
    {
        return $this->belongsToMany(\Cot\User::class);
    }

}
