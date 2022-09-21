<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChirpPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Chirp $chirp)
    {
        return $chirp->user()->is($user);
    }

    public function delete(User $user, Chirp $chirp)
    {
        return $this->update($user, $chirp);
    }
}