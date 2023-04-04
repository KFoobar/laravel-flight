<div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none z-50 sm:p-6 sm:items-start">
    <div class="w-full flex flex-col items-center space-y-4 sm:items-end" wire:poll.2000ms>
        @foreach ($this->notifications as $notification)
            <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden ease-out duration-300">
                <div class="w-full h-1">
                    <div class="progress-bar h-full bg-blue-500"></div>
                </div>
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            @if ($notification['type'] === 'success')
                                <i class="fa-regular fa-circle-check text-green-400"></i>
                            @elseif ($notification['type'] === 'error')
                                <i class="fa-regular fa-circle-xmark text-red-400"></i>
                            @else
                                <i class="fa-regular fa-circle-info text-blue-400"></i>
                            @endif
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $notification['title'] }}
                            </p>
                            @if (!empty($notification['message']))
                                <p class="mt-1 text-sm text-gray-500">
                                     {{ $notification['message'] }}
                                </p>
                            @endif
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <button wire:click="removeItem('{{ $notification['uuid'] }}')" type="button" class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none">
                                <span class="sr-only">Close</span>
                                <i class="fa-regular fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
