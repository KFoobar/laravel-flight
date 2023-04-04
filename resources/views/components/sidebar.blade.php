<div class="fixed inset-0 z-40 overflow-hidden"
    x-data="{ open: @entangle($attributes->wire('model')) }"
    x-show="open"
    x-cloak>
    <div class="absolute inset-0 overflow-hidden">
        <div x-show="open" class="absolute inset-0 bg-gray-900 bg-opacity-50 transition-opacity" aria-hidden="true"></div>
        <div x-show="open" class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
            <div class="pointer-events-auto w-screen max-w-xl">
                <div class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl">
                    <div class="bg-blue-900 p-6">
                        <div class="flex items-start justify-between">
                            <h2 class="text-lg font-semibold text-white">
                                {{ $title ?? 'Untitled' }}
                            </h2>
                            <div class="ml-3 flex h-7 items-center">
                                <button wire:click.prevent="close" class="rounded-md bg-transparent text-white hover:text-blue-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>

                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 divide-y divide-gray-200 overflow-y-auto">
                        {{ $slot }}
                    </div>
                    @if (!empty($footer))
                        <div class="flex flex-shrink-0 justify-between space-x-2 px-4 py-4">
                            {{ $footer }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
