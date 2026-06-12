<?php

namespace App\Policies;

use App\Models\Destination;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DestinationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function modify(User $user, Destination $destination)
{
    return $user->is_admin;
}
}
