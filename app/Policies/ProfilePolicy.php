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

    /**
    * Only Administrators and profile owner.
    *
    * @return boolean
    **/
    public function update(User $user, Profile $profile)
    {
        if ($user->email == "jeremyblc@gmail.com") {
            return true;
        }
        return $user->id == $profile->user_id;
    }

    /**
    * Only Administrators and profile owner.
    *
    * @return boolean
    **/
    public function create(User $user)
    {
        if ($user->email == "jeremyblc@gmail.com") {
            return true;
        }

        $profile = Profile::where('user_id', '=', $user->id)->first();
        if ( ! $profile->user_id == $user->id ){
            return true;
        }
    }

    /**
    * Only Administrators and profile owner.
    *
    * @return boolean
    **/
    public function delete(User $user, Profile $profile)
    {
        if ($user->email == "jeremyblc@gmail.com") {
            return true;
        }
        return $user->id == $profile->user_id;
    }
}
