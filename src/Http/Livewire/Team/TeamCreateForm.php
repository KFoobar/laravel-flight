<?php

namespace KFoobar\Flight\Http\Livewire\Team;

use KFoobar\Flight\Actions\User\CreateTeamAction;
use KFoobar\Flight\Http\Livewire\SidebarComponent;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class TeamCreateForm extends SidebarComponent
{
    use Toastable;

    public $team;

    protected $listeners = ['refresh' => '$refresh'];

    protected function rules()
    {
        return [
            'team.name'        => 'required|string|max:255|unique:teams,name|bail',
            'team.description' => 'required|string|bail',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            app(CreateTeamAction::class)->execute($this->team);
        } catch (Exception $e) {
            return $this->showError('Failed to create team!');
        }

        $this->emit('refresh');
        $this->mount();
        $this->close();

        return $this->showSuccess('New team added!');
    }

    public function render()
    {
        return view('flight::livewire.team.team-create-form');
    }
}
