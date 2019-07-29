<?php

namespace Cot;

use Illuminate\Database\Eloquent\Model;

/**
 * Cot\Role
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cot\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Cot\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
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
        'name' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the Users for the Role.
     */
    public function users()
    {
        return $this->belongsToMany(\Cot\User::class);
    }

}
