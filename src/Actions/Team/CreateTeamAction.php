<?php

namespace KFoobar\Flight\Actions\Team;

use App\Models\Team;

class CreateTeamAction
{
    /**
     * Executes the action.
     *
     * @param array $data
     *
     * @return Team
     */
    public function execute(array $data)
    {
        return Team::create($data);
    }
}
