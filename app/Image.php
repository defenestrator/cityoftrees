<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;
use Dyrynda\Database\Casts\EfficientUuid;
use Dyrynda\Database\Support\GeneratesUuid;

/**
 * Cot\Image
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $imageable_id
 * @property string|null $imageable_type
 * @property string $large
 * @property string $medium
 * @property string $small
 * @property string $square
 * @property string $original
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereLarge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereSmall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereSquare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Image whereUuid($value)
 * @mixin \Eloquent
 */
class Image extends Model
{
    use GeneratesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'imageable_id', 'imageable_type', 'large', 'medium', 'small', 'square', 'original'
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
        'uuid' => EfficientUuid::class,
        'imageable_type' => 'string',
        'large' => 'string',
        'medium' => 'string',
        'small' => 'string',
        'square' => 'string',
        'original' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
