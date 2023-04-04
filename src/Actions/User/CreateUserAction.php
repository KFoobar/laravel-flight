<?php

namespace KFoobar\Flight\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public function execute(array $data, array $roles = [])
    {
        $data = array_merge($data, [
            'password' => Hash::make('password'),
        ]);

        $user = User::create($data);

        if (!empty($roles)) {
            $user->roles()->sync($roles);
        }

        return $user;
    }
}
