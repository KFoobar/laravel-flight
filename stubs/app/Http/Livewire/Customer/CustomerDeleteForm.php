<?php

namespace App\Http\Livewire\Customer;

use App\Actions\Customer\DeleteCustomerAction;
use App\Models\Customer\Customer;
use KFoobar\Flight\Http\Livewire\ConfirmComponent;
use KFoobar\Flight\Traits\Livewire\Toastable;

class CustomerDeleteForm extends ConfirmComponent
{
    use Toastable;

    public Customer $customer;

    public function confirm()
    {
        try {
            app(DeleteCustomerAction::class)->execute($this->customer);
        } catch (\Exception $e) {
            return $this->showError('Failed to delete customer!');
        }

        redirect()->route('customers')
            ->with('success', 'Customer is now deleted!');
    }

    public function render()
    {
        return view('livewire.customer.customer-delete-form');
    }
}
