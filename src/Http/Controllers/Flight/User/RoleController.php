<?php

namespace KFoobar\Flight\Http\Controllers\Flight\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
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
        return view('flight::role.index');
    }

    /**
     * Shows the role page.
     *
     * @param \App\Models\Role $role
     *
     * @return \Illuminate\View\View
     */
    public function show(Role $role)
    {
        return view('flight::role.show', [
            'role' => $role,
        ]);
    }
}
