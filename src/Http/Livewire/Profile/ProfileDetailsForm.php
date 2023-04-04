<?php

namespace KFoobar\Flight\Http\Livewire\Profile;

use App\Models\User;
use KFoobar\Flight\Actions\User\UpdateUserAction;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class ProfileDetailsForm extends Component
{
    use Toastable;

    public User $user;

    protected function rules()
    {
        return [
            'user.name'  => 'required|string|bail',
            'user.title' => 'nullable|string|bail',
            'user.email' => 'required|email|unique:users,email,'.auth()->id().'|bail',
            'user.phone' => 'nullable|numeric|bail',
        ];
    }

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function submit()
    {
        $this->validate();

        try {
            app(UpdateUserAction::class)->execute($this->user);
        } catch (\Exception $e) {
            return $this->showError('Failed to update settings!');
        }

        return $this->showSuccess('Settings updated!');
    }

    public function render()
    {
        return view('flight::livewire.profile.profile-details-form');
    }
}
