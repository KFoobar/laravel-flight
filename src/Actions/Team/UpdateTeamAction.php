<?php

namespace KFoobar\Flight\Actions\Team;

use App\Models\Team;

class UpdateTeamAction
{
    public function execute(Team $team)
    {
        return $team->save();
    }
}
