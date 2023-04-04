<?php

namespace KFoobar\Flight\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $color = 'blue')
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
        return view('flight::components.button');
    }
}
