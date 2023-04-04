<?php

namespace KFoobar\Flight\Traits\Livewire;

use Illuminate\Database\Eloquent\Model;

trait Toastable
{
    protected function showError(string $message)
    {
        $this->emit('showToast', 'error', $message);
    }

    protected function showSuccess(string $message)
    {
        $this->emit('showToast', 'success', $message);
    }

    protected function showInfo(string $message)
    {
        $this->emit('showToast', 'info', $message);
    }

    protected function showWarning(string $message)
    {
        $this->emit('showToast', 'warning', $message);
    }
}
