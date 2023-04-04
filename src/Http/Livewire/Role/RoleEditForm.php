<?php

namespace KFoobar\Flight\Http\Livewire\Role;

use App\Models\Role;
use KFoobar\Flight\Actions\User\UpdateRoleAction;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class RoleEditForm extends Component
{
    use Toastable;

    public Role $role;

    protected function rules()
    {
        return [
            'role.name'        => 'required|string|max:255|unique:roles,name,'.$this->role->id.'|bail',
            'role.description' => 'required|string|bail',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            app(UpdateRoleAction::class)->execute($this->role);
        } catch (\Exception $e) {
            return $this->showError('Failed to update role!');
        }

        return $this->showSuccess('Role updated!');
    }

    public function render()
    {
        return view('flight::livewire.role.role-edit-form');
    }
}
