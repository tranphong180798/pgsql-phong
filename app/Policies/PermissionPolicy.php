<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
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

<<<<<<< Updated upstream
//    public function show(User $user)
//    {
//        return $user->hasAccess('view');
//    }


=======

//    public function show(User $user, Permission $permission) {
//        return $user->hasAccess(['permission.show']);
//    }
>>>>>>> Stashed changes

}
