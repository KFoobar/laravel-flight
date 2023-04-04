<?php

namespace KFoobar\Flight\Actions\TwoFactor;

use App\Models\User;

class ResetTwoFactorAuthAction
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
        app(\Laravel\Fortify\Actions\GenerateNewRecoveryCodes::class)($user);

        return true;
    }
}
