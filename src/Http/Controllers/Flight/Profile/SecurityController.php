<?php

namespace KFoobar\Flight\Http\Controllers\Flight\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function password(Request $request)
    {
        return view('flight::profile.password');
    }

    public function twofactor(Request $request)
    {
        return view('flight::fortify.two-factor.setup');
    }

    public function backup(Request $request)
    {
        return view('flight::fortify.two-factor.backup');
    }
}
