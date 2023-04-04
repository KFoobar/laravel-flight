<?php

namespace KFoobar\Flight\Actions\User;

use App\Models\User;

class DeleteUserAction
{
    public function execute(User $user)
    {
        return $user->delete();
    }
}
