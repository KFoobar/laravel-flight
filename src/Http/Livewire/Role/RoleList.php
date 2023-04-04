<?php

namespace KFoobar\Flight\Http\Livewire\Role;

use App\Models\Role;
use KFoobar\Flight\Traits\Livewire\Searchable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class RoleList extends Component
{
    use Searchable;

    protected $listeners = ['refresh' => '$refresh'];

    public function boot()
    {
        $this->model = new Role;
    }

    protected function query(Builder $query)
    {
        return $query->when(is_numeric($this->status), function ($query) {
            return $query->where('active', $this->status);
        });
    }

    public function render()
    {
        return view('flight::livewire.role.role-list');
    }
}
