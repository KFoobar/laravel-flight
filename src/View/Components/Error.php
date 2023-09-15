<?php

namespace KFoobar\Flight\View\Components;

use Illuminate\View\Component;

class Error extends Component
{
    public $for;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for = null)
    {
        $this->for = $for;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('flight::components.error');
    }
}
