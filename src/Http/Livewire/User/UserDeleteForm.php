<?php

namespace KFoobar\Flight\Http\Livewire\User;

use App\Models\User;
use KFoobar\Flight\Actions\User\DeleteUserAction;
use KFoobar\Flight\Http\Livewire\ConfirmComponent;

class UserDeleteForm extends ConfirmComponent
{
    public User $user;

    public function confirm()
    {
        try {
            app(DeleteUserAction::class)->execute($this->user);
        } catch (\Exception $e) {
            redirect()->route('users')
                ->with('success', 'Failed to delete user!');
        }

        redirect()->route('users')
            ->with('success', 'User is now deleted!');
    }

    public function render()
    {
        return view('flight::livewire.user.user-delete-form');
    }
}
