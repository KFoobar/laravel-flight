<?php

namespace KFoobar\Flight\Http\Livewire\Team;

use App\Models\Team;
use KFoobar\Flight\Traits\Livewire\Searchable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class TeamList extends Component
{
    use Searchable;

    protected $listeners = ['refresh' => '$refresh'];

    public function boot()
    {
        $this->model = new Team;
    }

    protected function query(Builder $query)
    {
        return $query->when(is_numeric($this->status), function ($query) {
            return $query->where('active', $this->status);
        });
    }

    public function render()
    {
        return view('flight::livewire.team.team-list');
    }
}
