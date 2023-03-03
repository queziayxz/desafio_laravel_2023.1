<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class MailPolicy
{
    use HandlesAuthorization;

    public function createMail(User $user)
    {
        return $user->type == 0;
    }
}
