<?php

namespace KFoobar\Flight\Actions\User;

use App\Models\User;

class UpdateUserAction
{
    public function execute(User $user, array $data = [])
    {
        if (!empty($data)) {
            $user->update($data);
        }

        $user->save();

        return $user;
    }
}
