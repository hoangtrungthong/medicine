<?php

namespace App\Models\Traits\Relationship;

use App\Models\User;

/**
 * Class RoleRelationship.
 */
trait RoleRelationship
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
