<?php

namespace KFoobar\Flight\Http\Controllers\Flight\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Shows the profile page.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\View\View
     */
    public function profile(Request $request)
    {
        return view('flight::profile.index');
    }
}
