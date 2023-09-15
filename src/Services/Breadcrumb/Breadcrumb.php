<?php

namespace KFoobar\Flight\Services\Breadcrumb;

class Breadcrumb
{
    protected $items;

    public function __construct()
    {
        $this->items = collect();
    }

    public function add(string $title, string $url)
    {
        $this->items->push([
            'title' => $title,
            'url'   => $url,
        ]);

        return $this;
    }

    public function make()
    {
        return $this->items->toArray();
    }
}
