<?php

namespace KFoobar\Flight\Traits\Model;

use App\Models\Role;

trait HasRoles
{
    /**
     * Counts the number of roles.
     *
     * @param int $offset
     *
     * @return int
     */
    public function countRoles(int $offset = 0)
    {
        return ($this->roles()->count() + $offset);
    }

    /**
     * Determines if entity has roles.
     *
     * @return bool
     */
    public function hasRoles()
    {
        return $this->roles()->count() ? true : false;
    }

    /**
     * Gets the main role.
     *
     * @return \Illuminate\Database\Eloquent\Concerns\BelongsToMany
     */
    public function getMainRole()
    {
        return $this->roles->sortByDesc('level')->first();
    }

    /**
     * Roles.
     *
     * @return \Illuminate\Database\Eloquent\Concerns\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
