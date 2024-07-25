<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;

class UserObserver
{
    public function creating(User $user): void
    {
        $role = Role::query()->where('name', '=', 'seeker')->first();
        if ($role){
            $user->role_id = $role->id;
        }

    }
}
