<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Builder;
use KFoobar\Flight\Traits\Livewire\Searchable;
use Livewire\Component;

class CustomerList extends Component
{
    use Searchable;

    protected $listeners = ['refresh' => '$refresh'];

    public function boot()
    {
        $this->model = new Customer;
        $this->column = 'company';
    }

    protected function query(Builder $query)
    {
        return $query->when(is_numeric($this->status), function ($query) {
            return $query->where('active', $this->status);
        });
    }

    public function render()
    {
        return view('livewire.customer.customer-list');
    }
}
