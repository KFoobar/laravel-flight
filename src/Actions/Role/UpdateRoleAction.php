<?php

namespace KFoobar\Flight\Actions\Role;

use App\Models\Role;

class UpdateRoleAction
{
    public function execute(Role $role)
    {
        return $role->save();
    }
}
