<?php

namespace App\Http\Livewire\Customer;

use App\Actions\Customer\UpdateCustomerAction;
use App\Models\Customer\Customer;
use KFoobar\Flight\Traits\Livewire\Toastable;
use Livewire\Component;

class CustomerEditForm extends Component
{
    use Toastable;

    public Customer $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    protected function rules()
    {
        return [
            'customer.orgnr'   => 'required|numeric|unique:customers,orgnr,' . $this->customer->id . '|bail',
            'customer.company' => 'required|string|bail',
            'customer.email'   => 'required|email|bail',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            app(UpdateCustomerAction::class)->execute($this->customer);
        } catch (\Exception $e) {
            return $this->showError('Failed to update customer!');
        }

        return $this->showSuccess('Customer updated!');
    }

    public function render()
    {
        return view('livewire.customer.customer-edit-form');
    }
}
