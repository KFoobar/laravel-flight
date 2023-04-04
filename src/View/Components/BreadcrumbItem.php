<?php

namespace KFoobar\Flight\View\Components;

use Illuminate\View\Component;

class BreadcrumbItem extends Component
{
    public $url;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $url = null)
    {
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('flight::components.breadcrumb-item');
    }
}
