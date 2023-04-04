<?php

namespace KFoobar\Flight\Http\Livewire\Profile;

use KFoobar\Flight\Actions\TwoFactor\ConfirmTwoFactorAuthAction;
use KFoobar\Flight\Actions\TwoFactor\DisableTwoFactorAuthAction;
use KFoobar\Flight\Actions\TwoFactor\EnableTwoFactorAuthAction;
use Livewire\Component;

class TwoFactorSetup extends Component
{
    public $code;
    public $status;

    protected function rules()
    {
        return [
            'code' => ['required', 'string', 'digits:6', 'bail'],
        ];
    }

    public function mount()
    {
        app(EnableTwoFactorAuthAction::class)
            ->execute(auth()->user());
    }

    public function abort()
    {
        app(DisableTwoFactorAuthAction::class)
            ->execute(auth()->user());

        return redirect()
            ->route('profile.password');
    }

    public function submit()
    {
        $this->validate();

        $status = app(ConfirmTwoFactorAuthAction::class)
            ->execute(auth()->user(), $this->code);

        return redirect()
            ->route('profile.password')
            ->with('status', 'two-factor-authentication-confirmed');
    }

    public function render()
    {
        return view('flight::livewire.profile.two-factor-setup');
    }
}
