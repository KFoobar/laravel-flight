<?php

namespace KFoobar\Flight\Http\Livewire\Profile;

use KFoobar\Flight\Actions\User\UpdatePasswordAction;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Laravel\Fortify\Rules\Password;
use Livewire\Component;

class ProfilePasswordForm extends Component
{
    use Toastable;

    public $current;
    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'current'  => ['required', 'current_password:web'],
            'password' => ['required', 'string', new Password, 'confirmed'],
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            app(UpdatePasswordAction::class)->execute(auth()->user(), $this->password);
        } catch (\Exception $e) {
            return $this->showError('Failed to update password!');
        }

        $this->reset();

        return $this->showSuccess('Your password is now updated!');
    }

    public function render()
    {
        return view('flight::livewire.profile.profile-password-form');
    }
}
