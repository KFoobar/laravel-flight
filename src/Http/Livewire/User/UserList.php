<?php

namespace KFoobar\Flight\Http\Livewire\User;

use App\Models\User;
use KFoobar\Flight\Traits\Livewire\Searchable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class UserList extends Component
{
    use Searchable;

    protected $listeners = ['refresh' => '$refresh'];

    public function boot()
    {
        $this->model = new User;
    }

    protected function query(Builder $query)
    {
        return $query->when(is_numeric($this->status), function ($query) {
            return $query->where('active', $this->status);
        });
    }

    public function render()
    {
        return view('flight::livewire.user.user-list');
    }
}
