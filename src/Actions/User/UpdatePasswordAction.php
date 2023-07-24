<?php

namespace KFoobar\Flight\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordAction
{
    /**
     * Executes the action.
     *
     * @param \App\Models\User\User $user
     * @param mixed                 $password
     *
     * @return bool
     */
    public function execute(User $user, mixed $password)
    {
        $password = $password['password'] ?? $password;

        $user->update([
            'password'              => Hash::make($password),
            'password_confirmed_at' => now(),
        ]);

        return true;
    }
}
