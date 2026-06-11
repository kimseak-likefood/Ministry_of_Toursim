<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Attraction;

class AttractionPolicy
{
    public function modify(User $user): bool
    {
        return $user->is_admin;
    }
}