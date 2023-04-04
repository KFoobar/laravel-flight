<?php

namespace App\Http\Controllers\Customer;

use App\Models\Customer\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerController extends Controller
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
        return view('customer.index');
    }

    /**
     * Shows the customer page.
     *
     * @param \App\Models\Customer $customer
     *
     * @return \Illuminate\View\View
     */
    public function show(Customer $customer)
    {
        return view('customer.show', [
            'customer' => $customer,
        ]);
    }
}
