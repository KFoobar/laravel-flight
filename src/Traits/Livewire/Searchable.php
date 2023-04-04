<?php

namespace KFoobar\Flight\Traits\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait Searchable
{
    protected $model;
    protected $items;
    protected $column = 'name';

    public $keyword;
    public $status;
    public $size = 25;

    public function booted()
    {
        $this->items = $this->filter();
    }

    public function updated()
    {
        $this->items = $this->filter();
    }

    protected function query(Builder $query)
    {
        return $query;
    }

    protected function filter()
    {
        if (!$this->model instanceof Model) {
            return collect();
        }

        $query = $this->model::query();

        return $this->query($query)
            ->when($this->keyword, function ($query) {
                return $query->where($this->column, 'like', '%' . $this->keyword . '%');
            })
            ->simplePaginate($this->size);
    }
}
