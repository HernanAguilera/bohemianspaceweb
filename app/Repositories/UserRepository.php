<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;

class UserRepository
{
    public function setEditorRole(User $user): void {
        $editor_role = Role::where('name', '=', 'editor')->first();
        $user->roles()->attach($editor_role->id);
    }
}
