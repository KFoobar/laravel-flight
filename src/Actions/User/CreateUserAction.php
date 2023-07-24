<?php

namespace KFoobar\Flight\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use KFoobar\Flight\Notifications\UserInvitation;

class CreateUserAction
{
    public function execute(array $data, array $roles = [], bool $notify = true)
    {
        $password = Str::random(16);

        $data = array_merge($data, [
            'password' => Hash::make($password),
            'password_confirmed_at' => null,
        ]);

        $user = User::create($data);

        if (!empty($roles)) {
            $user->roles()->sync($roles);
        }

        if ($notify === true) {
            $user->notify(new UserInvitation($password));
        }

        return $user;
    }
}
