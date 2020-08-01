<?php

namespace Cot\Policies;

use Cot\User;
use Cot\Profile;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
       //
    }

    public function view(User $user, Profile $profile)
    {
        if ($profile->public == true) {
            return true;
        }
        $profile = Profile::where('user_id', '=', $user->id)->first();

        return $user->id == $profile->user_id;

    }
    /**
    * Only Administrators and profile owner.
    *
    * @return boolean
    **/
    public function update(User $user, Profile $profile)
    {
        return $user->id == $profile->user_id;
    }

    /**
    * Only Administrators and profile owner.
    *
    * @return boolean
    **/
    public function create(User $user)
    {
        $profile = Profile::where('user_id', '=', $user->id)->first();
        return $profile->user_id == $user->id;
    }

    /**
    * Only Administrators and profile owner.
    *
    * @return boolean
    **/
    public function delete(User $user, Profile $profile)
    {
        return $user->id == $profile->user_id;
    }
}
