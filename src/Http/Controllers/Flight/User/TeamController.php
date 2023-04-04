<?php

namespace KFoobar\Flight\Http\Controllers\Flight\User;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
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
        return view('flight::team.index');
    }

    /**
     * Shows the team page.
     *
     * @param \App\Models\Team $team
     *
     * @return \Illuminate\View\View
     */
    public function show(Team $team)
    {
        return view('flight::team.show', [
            'team' => $team,
        ]);
    }
}
