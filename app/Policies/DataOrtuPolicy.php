<?php

namespace App\Policies;

use App\{DataOrtu, User};
use Illuminate\Auth\Access\HandlesAuthorization;

class DataOrtuPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show(User $user, DataOrtu $dataOrtu)
    {
        return $user->id === $dataOrtu->user_id;
    }
    public function edit(User $user, DataOrtu $dataOrtu)
    {
        return $user->id === $dataOrtu->user_id;
    }
    public function delete(User $user, DataOrtu $dataOrtu)
    {
        return $user->id === $dataOrtu->user_id;
    }
}
