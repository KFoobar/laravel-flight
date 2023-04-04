<?php

namespace App\Actions\Customer;

use App\Models\Customer\Customer;

class UpdateCustomerAction
{
    /**
     * Updates the given customer.
     *
     * @param \App\Models\Customer $customer
     * @param array                $data
     *
     * @return \App\Models\Customer
     */
    public function execute(Customer $customer, array $data = [])
    {
        if (!empty($data)) {
            $customer->update($data);
        }

        return $customer->save();
    }
}
