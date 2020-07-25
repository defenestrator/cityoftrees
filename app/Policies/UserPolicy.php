<?php

namespace Cot\Policies;

use Cot\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;

class UserPolicy
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
    * Only Administrators and owner.
    * @return boolean
    **/
    public function update(User $user)
    {
        if ($user->email == "jeremyblc@gmail.com") {
            return true;
        }
        return Auth::user()->id == $user->id;
    }

    /**
    * Only Administrators and owner.
    * @return boolean
    **/
    public function create(User $user)
    {
        if ($user->email == "jeremyblc@gmail.com") {
            return true;
        }
        return Auth::user()->id == $user->id;
    }

    /**
    * Only Administrators and profile owner.
    * @return boolean
    **/
    public function delete(User $user)
    {
        if ($user->email == "jeremyblc@gmail.com") {
            return true;
        }
        return Auth::user()->id == $user->id;
    }
}
