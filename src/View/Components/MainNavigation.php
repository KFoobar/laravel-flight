<?php

namespace KFoobar\Flight\View\Components;

use Illuminate\View\Component;

class MainNavigation extends Component
{
    public $groups;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $groups = [])
    {
        $this->groups = $groups;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('flight::components.navigation.main');
    }
}
