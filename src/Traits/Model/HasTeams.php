<?php

namespace KFoobar\Flight\Traits\Model;

use App\Models\Team;

trait HasTeams
{
    /**
     * Counts the number of teams.
     *
     * @param int $offset
     *
     * @return int
     */
    public function countTeams(int $offset = 0)
    {
        return ($this->teams()->count() + $offset);
    }

    /**
     * Determines if entity has teams.
     *
     * @return bool
     */
    public function hasTeams()
    {
        return $this->teams()->count() ? true : false;
    }

    /**
     * Roles.
     *
     * @return \Illuminate\Database\Eloquent\Concerns\BelongsToMany
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
