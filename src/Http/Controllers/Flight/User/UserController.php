<?php

namespace KFoobar\Flight\Http\Controllers\Flight\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Shows the index page.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('flight::user.index');
    }

    /**
     * Shows the user page.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('flight::user.show', [
            'user' => $user,
        ]);
    }
}
