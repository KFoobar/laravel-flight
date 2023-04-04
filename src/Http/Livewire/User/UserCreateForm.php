<?php

namespace KFoobar\Flight\Http\Livewire\User;

use App\Models\Role;
use KFoobar\Flight\Actions\User\CreateUserAction;
use KFoobar\Flight\Actions\User\UpdateRolesAction;
use KFoobar\Flight\Http\Livewire\SidebarComponent;
use KFoobar\Flight\Rules\ArrayAtLeastOneRequired;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class UserCreateForm extends SidebarComponent
{
    use Toastable;

    public $user;
    public $roles = [];

    protected $listeners = ['refresh' => '$refresh'];

    protected function rules()
    {
        return [
            'user.name'  => 'required|string|max:255|bail',
            'user.email' => 'required|email|unique:users,email|bail',
            'user.phone' => 'required|numeric|bail',
            'roles'      => ['required', 'array', new ArrayAtLeastOneRequired, 'bail'],
        ];
    }

    public function mount()
    {
        $this->activeRoles = Role::all();
    }

    public function submit()
    {
        $this->validate();

        $roles = array_keys(array_filter($this->roles));

        try {
            $user = app(CreateUserAction::class)->execute($this->user);
            app(UpdateRolesAction::class)->execute($user, $roles);
        } catch (Exception $e) {
            return $this->showError('Failed to create user!');
        }

        $this->emit('refresh');
        $this->mount();
        $this->close();

        return $this->showSuccess('New user added!');
    }

    public function render()
    {
        return view('flight::livewire.user.user-create-form');
    }
}
