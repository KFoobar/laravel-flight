<?php

namespace App\Actions\Customer;

use App\Models\Customer\Customer;

class DeleteCustomerAction
{
    /**
     * Updates the given customer.
     *
     * @param \App\Models\Customer $customer
     *
     * @return bool
     */
    public function execute(Customer $customer)
    {
        return $customer->delete();
    }
}
