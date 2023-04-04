<?php

namespace KFoobar\Flight\Http\Controllers\Flight\Terms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    /**
     * Shows the dashboard page.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('system.terms.index');
    }
}
