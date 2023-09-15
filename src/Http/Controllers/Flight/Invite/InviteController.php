<?php

namespace KFoobar\Flight\Http\Controllers\Flight\Invite;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use KFoobar\Flight\Actions\User\UpdatePasswordAction;
use KFoobar\Flight\Http\Requests\Invite\UpdatePasswordRequest;

class InviteController extends Controller
{
    /**
     * Shows the invite page.
     *
     * @param User $user
     *
     * @return \Illuminate\View\View
     */
    public function form(User $user)
    {
        if (!empty($user->password_confirmed_at)) {
            abort(404);
        }

        if (empty($user->email_verified_at)) {
            $user->email_verified_at = now();
            $user->save();
        }

        return view('flight::fortify.invite.form', [
            'user' => $user,
        ]);
    }

    /**
     * Updates the password.
     *
     * @param User $user
     *
     * @return \Illuminate\View\View
     */
    public function update(User $user, UpdatePasswordRequest $request)
    {
        if (!empty($user->password_confirmed_at)) {
            abort(404);
        }

        app(UpdatePasswordAction::class)->execute($user, $request->password);

        return redirect()->route('dashboard');
    }
}
