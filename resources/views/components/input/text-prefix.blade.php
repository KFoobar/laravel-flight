<div class="mt-1 flex rounded-md shadow-sm">
    <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm">
        {{ $prefix ?? null }}
    </span>
    <input type="text" wire:model="{{ $name }}" name="{{ $name }}" autocomplete="{{ $autocomplete ?? 'new-password' }}" placeholder="{{ $placeholder ?? null }}"
        class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 px-3 py-2 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
</div>
