<?php

namespace KFoobar\Flight\Actions\Team;

use App\Models\Team;

class DeleteTeamAction
{
    public function execute(Team $team)
    {
        return $team->delete();
    }
}
