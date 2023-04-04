<?php

namespace KFoobar\Flight\View\Components;

use Illuminate\View\Component;

class Hint extends Component
{
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'gray')
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('flight::components.input-hint');
    }
}
