<?php

namespace KFoobar\Flight\Http\Livewire\Team;

use App\Models\Team;
use KFoobar\Flight\Actions\User\UpdateTeamAction;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class TeamEditForm extends Component
{
    use Toastable;

    public Team $team;

    protected function rules()
    {
        return [
            'team.name'        => 'required|string|max:255|unique:teams,name,'.$this->team->id.'|bail',
            'team.description' => 'required|string|bail',
            'team.active'      => 'required|bool|bail',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            app(UpdateTeamAction::class)->execute($this->team);
        } catch (\Exception $e) {
            return $this->showError('Failed to update team!');
        }

        return $this->showSuccess('Team updated!');
    }

    public function render()
    {
        return view('flight::livewire.team.team-edit-form');
    }
}
