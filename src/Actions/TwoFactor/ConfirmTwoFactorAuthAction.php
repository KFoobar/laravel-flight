<?php

namespace KFoobar\Flight\Actions\TwoFactor;

use App\Models\User;

class ConfirmTwoFactorAuthAction
{
    /**
     * Executes the action.
     *
     * @param \App\Models\User $user
     * @param string                $code
     *
     * @return bool
     */
    public function execute(User $user, string $code)
    {
        app(\Laravel\Fortify\Actions\ConfirmTwoFactorAuthentication::class)($user, $code);

        return true;
    }
}
