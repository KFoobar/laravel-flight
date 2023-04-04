<?php

namespace KFoobar\Flight\Http\Livewire\User;

use App\Models\User;
use KFoobar\Flight\Actions\User\UpdateStatusAction;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class UserStatusForm extends Component
{
    use Toastable;

    public User $user;

    public function activate()
    {
        try {
            app(UpdateStatusAction::class)->execute($this->user, true);
        } catch (\Exception $e) {
            return $this->showError('Failed to update account status!');
        }

        return $this->showSuccess('Account is now activated!');
    }

    public function deactivate()
    {
        try {
            app(UpdateStatusAction::class)->execute($this->user, false);
        } catch (\Exception $e) {
            return $this->showError('Failed to update account status!');
        }

        return $this->showSuccess('Account is now deactivated!');
    }

    public function render()
    {
        return view('flight::livewire.user.user-status-form');
    }
}
