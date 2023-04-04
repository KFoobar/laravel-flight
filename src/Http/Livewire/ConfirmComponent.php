<?php

namespace KFoobar\Flight\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ConfirmComponent extends Component
{
    public $show = false;

    protected $listeners = [
        'show' => 'show'
    ];

    public function show()
    {
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }

    public function toggle()
    {
       $this->show = !$this->show;
    }

    public function cancel()
    {
        $this->close();
    }

    public function confirm()
    {
        $this->close();
    }
}
