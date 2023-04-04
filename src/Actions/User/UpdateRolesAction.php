<?php

namespace KFoobar\Flight\Actions\User;

use App\Models\User;

class UpdateRolesAction
{
    public function execute(User $user, array $roles = [])
    {
        return $user->roles()->sync($roles);
    }
}
