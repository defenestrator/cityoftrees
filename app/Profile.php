<?php

namespace Cot;

use Dyrynda\Database\Casts\EfficientUuid;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;

/**
 * Cot\Profile
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property string|null $screen_name
 * @property string|null $title
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $phone
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $snapchat
 * @property string|null $thcfarmer
 * @property string|null $rollitup
 * @property string|null $four20mag
 * @property string|null $leafly
 * @property string|null $strainly
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Cot\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereFour20mag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereLeafly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereRollitup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereScreenName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereSnapchat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereStrainly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereThcfarmer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Profile whereUuid($value)
 * @mixin \Eloquent
 */
class Profile extends Model
{
    use GeneratesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'user_id', 'screen_name', 'title', 'first_name', 'last_name', 'phone', 'facebook', 'instagram', 'twitter', 'snapchat', 'thcfarmer', 'rollitup', 'four20mag', 'leafly', 'strainly'
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
        'screen_name' => 'string',
        'title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'twitter' => 'string',
        'snapchat' => 'string',
        'thcfarmer' => 'string',
        'rollitup' => 'string',
        'four20mag' => 'string',
        'leafly' => 'string',
        'strainly' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
    *  User for the Profile.
    */
    public function user()
    {
        return $this->belongsTo(\Cot\User::class);
    }

    /**
    *  User's current profile image.
    */
    public function image()
    {
        return $this->morphOne(\Cot\Image::class, 'imageable');
    }
}
