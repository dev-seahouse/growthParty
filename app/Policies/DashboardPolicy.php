<?php

namespace App\Policies;

use App\Programs\Program;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DashboardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the program.
     *
     * @param  \App\User  $user
     * @param  \App\Program  $program
     * @return mixed
     */
    public function view(User $user, Program $program)
    {
      // if user has the program return true
      return $user->programs->contains($program);
    }

    /**
     * Determine whether the user can create programs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the program.
     *
     * @param  \App\User  $user
     * @param  \App\Program  $program
     * @return mixed
     */
    public function update(User $user, Program $program)
    {
        //
    }

    /**
     * Determine whether the user can delete the program.
     *
     * @param  \App\User  $user
     * @param  \App\Program  $program
     * @return mixed
     */
    public function delete(User $user, Program $program)
    {
        //
    }
}
