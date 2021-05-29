<?php

namespace App\Policies;

use App\Models\Account;
use App\Models\Guild;
use Illuminate\Auth\Access\HandlesAuthorization;

class GuildPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Account  $account
     * @return mixed
     */
    public function viewAny(Account $account)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Account  $account
     * @param  \App\Models\Guild  $guild
     * @return mixed
     */
    public function view(Account $account, Guild $guild)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Account  $account
     * @return mixed
     */
    public function create(Account $account)
    {
        // return $account->
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Account  $account
     * @param  \App\Models\Guild  $guild
     * @return mixed
     */
    public function update(Account $account, Guild $guild)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Account  $account
     * @param  \App\Models\Guild  $guild
     * @return mixed
     */
    public function delete(Account $account, Guild $guild)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Account  $account
     * @param  \App\Models\Guild  $guild
     * @return mixed
     */
    public function restore(Account $account, Guild $guild)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Account  $account
     * @param  \App\Models\Guild  $guild
     * @return mixed
     */
    public function forceDelete(Account $account, Guild $guild)
    {
        //
    }
}
