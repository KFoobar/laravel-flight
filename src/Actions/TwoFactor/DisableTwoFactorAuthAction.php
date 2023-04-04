<?php

namespace KFoobar\Flight\Actions\TwoFactor;

use App\Models\User;

class DisableTwoFactorAuthAction
{
    /**
     * Executes the action.
     *
     * @param \App\Models\User $user
     *
     * @return bool
     */
    public function execute(User $user)
    {
        app(\Laravel\Fortify\Actions\DisableTwoFactorAuthentication::class)($user);

        return true;
    }
}
