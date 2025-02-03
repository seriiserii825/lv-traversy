<?php

namespace App\Policies;

use App\Models\JobListing;
use App\Models\User;

class JobPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, JobListing $job)
    {
        return $job->user_id === $user->id;
    }
}
