<?php

namespace KFoobar\Flight\Http\Livewire\Profile;

use KFoobar\Flight\Actions\TwoFactor\DisableTwoFactorAuthAction;
use KFoobar\Flight\Http\Livewire\ConfirmComponent;
use KFoobar\Flight\Traits\Livewire\Toastable;

class ProfileTwoFactorForm extends ConfirmComponent
{
    use Toastable;

    public function confirm()
    {
        try {
            app(DisableTwoFactorAuthAction::class)
                ->execute(auth()->user());
        } catch (Exception $e) {
            return $this->showError('Failed to delete team!');
        }

        return redirect()
            ->route('profile.password')
            ->with('success', 'Two factor auth is now disabled!');
    }

    public function render()
    {
        return view('flight::livewire.profile.profile-two-factor-form');
    }
}
