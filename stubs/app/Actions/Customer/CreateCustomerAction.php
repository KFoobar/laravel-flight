<?php

namespace App\Actions\Customer;

use App\Models\Customer\Customer;

class CreateCustomerAction
{
    /**
     * Creates new customer.
     *
     * @param array $data
     *
     * @return \App\Models\Customer
     */
    public function execute(array $data)
    {
        return Customer::create($data);
    }
}
