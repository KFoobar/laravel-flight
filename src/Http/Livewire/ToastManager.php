<?php

namespace KFoobar\Flight\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class ToastManager extends Component
{
    public Collection $notifications;

    protected function getListeners()
    {
        return [
            'showToast' => 'showToast',
        ];
    }

    public function mount()
    {
        $this->notifications = collect();

        if (session('error')) {
            $this->showError('Error!', session('error'));
        }

        if (session('success')) {
            $this->showSuccess('Success!', session('success'));
        }
    }

    public function render()
    {
        $this->refresh();

        return view('flight::livewire.toast-manager');
    }

    public function refresh()
    {
        $this->notifications = $this->notifications->filter(function ($item) {
            return Carbon::parse($item['timestamp'])->addSeconds(4)->isFuture();
        });
    }

    public function removeItem(string $uuid)
    {
        $this->notifications = $this->notifications->filter(function ($item) use ($uuid) {
            return $item['uuid'] !== $uuid;
        });
    }

    public function showSuccess($title, $message = null)
    {
        $this->showToast('success', $title, $message);
    }

    public function showError($title, $message = null)
    {
        $this->showToast('error', $title, $message);
    }

    public function showToast($type, $title = null, $message = null)
    {
        $this->notifications->push([
            'uuid'      => Str::uuid(),
            'timestamp' => now(),
            'type'      => $type,
            'title'     => $title,
            'message'   => $message,
        ]);
    }
}
