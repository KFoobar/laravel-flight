<?php

namespace KFoobar\Flight\Http\Livewire\User;

use App\Models\User;
use KFoobar\Flight\Actions\User\UpdateRolesAction;
use KFoobar\Flight\Rules\ArrayAtLeastOneRequired;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class UserRoleForm extends Component
{
    use Toastable;

    public User $user;
    public array $roles = [];

    protected function rules()
    {
        return [
            'roles' => ['required', 'array', new ArrayAtLeastOneRequired, 'bail'],
        ];
    }

    public function mount()
    {
        $this->roles = $this->user->roles->mapWithKeys(function ($role) {
            return [$role->id => true];
        })->toArray();
    }

    public function submit()
    {
        $this->validate();

        $roles = array_keys(array_filter($this->roles));

        try {
            app(UpdateRolesAction::class)->execute($this->user, $roles);
        } catch (\Exception $e) {
            return $this->showError('Failed to update user!');
        }

        return $this->showSuccess('User updated!');
    }

    public function render()
    {
        return view('flight::livewire.user.user-role-form');
    }
}
