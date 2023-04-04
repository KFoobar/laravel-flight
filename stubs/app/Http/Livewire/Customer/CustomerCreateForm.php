<?php

namespace App\Http\Livewire\Customer;

use App\Actions\Customer\CreateCustomerAction;
use App\Models\Customer\Customer;
use KFoobar\Flight\Http\Livewire\SidebarComponent;
use KFoobar\Flight\Traits\Livewire\Toastable;

class CustomerCreateForm extends SidebarComponent
{
    use Toastable;

    public Customer $customer;

    public function mount()
    {
        $this->customer = new Customer;
    }

    protected function rules()
    {
        return [
            'customer.orgnr'   => 'required|numeric|unique:customers,orgnr|bail',
            'customer.company' => 'required|string|bail',
            'customer.email'   => 'required|email|bail',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            app(CreateCustomerAction::class)->execute($this->customer->toArray());
        } catch (\Exception $e) {
            return $this->showError('Failed to create customer!');
        }

        $this->emit('refresh');
        $this->mount();
        $this->close();

        return $this->showSuccess('New customer added!');
    }

    public function render()
    {
        return view('livewire.customer.customer-create-form');
    }
}
