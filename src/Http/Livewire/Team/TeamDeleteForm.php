<?php

namespace KFoobar\Flight\Http\Livewire\Team;

use App\Models\Team;
use KFoobar\Flight\Actions\User\DeleteTeamAction;
use KFoobar\Flight\Http\Livewire\ConfirmComponent;
use KFoobar\Flight\Traits\Livewire\Toastable;

class TeamDeleteForm extends ConfirmComponent
{
    use Toastable;

    public Team $team;

    public function confirm()
    {
        try {
            app(DeleteTeamAction::class)->execute($this->team);
        } catch (Exception $e) {
            return $this->showError('Failed to delete team!');
        }

        redirect()->route('teams')
            ->with('success', 'Team is now deleted!');
    }

    public function render()
    {
        return view('flight::livewire.team.team-delete-form');
    }
}
