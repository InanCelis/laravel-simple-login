<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

   /**
     * Determine whether the user can read consignees.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function read(User $user)
    {
        if ($user->hasPermission('read_users')) {
            return true;
        } else {
            return false;
        }
    }

}
