<div x-data="{ open: @entangle($attributes->wire('model')) }"
    x-show="open"
    x-on:keydown.escape.window="open = false"
    x-cloak
    class="relative z-10">
    <div x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div x-show="open" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
            <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-md sm:w-full">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
