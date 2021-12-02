<?php

namespace App\Policies;

use App\Models\Season;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeasonPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Season $season)
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Season $season)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Season $season)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Season $season)
    {
        return method_exists($season,'trashed') && $season->trashed();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Season $season)
    {
        return true;
    }
}
