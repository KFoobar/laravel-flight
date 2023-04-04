<?php

namespace KFoobar\Flight\Actions\User;

use App\Models\User;

class UpdateStatusAction
{
    public function execute(User $user, bool $status)
    {
        return $user->update([
            'active' => $status,
        ]);
    }
}
