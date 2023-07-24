<?php

namespace KFoobar\Flight\Http\Livewire\User;

use App\Models\User;
use KFoobar\Flight\Actions\User\UpdateUserAction;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class UserEditForm extends Component
{
    use Toastable;

    public User $user;

    protected function rules()
    {
        return [
            'user.name'  => 'required|string|max:255|bail',
            'user.email' => 'required|string|unique:users,email,' . $this->user->id . '|bail',
            'user.phone' => 'nullable|numeric|bail',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            app(UpdateUserAction::class)->execute($this->user);
        } catch (\Exception $e) {
            return $this->showError('Failed to update user!');
        }

        return $this->showSuccess('User updated!');
    }

    public function render()
    {
        return view('flight::livewire.user.user-edit-form');
    }
}
