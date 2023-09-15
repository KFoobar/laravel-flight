<div class="relative flex items-start">
    <div class="flex h-5 items-center">
        <input wire:model="{{ $name ?? null }}" id="{{ $name ?? null }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
    </div>
    <div class="ml-3 text-sm">
        <label for="{{ $name ?? null }}" class="font-medium text-gray-700">
            {{ $title ?? null }}
        </label>
        @if (!empty($description))
            <p class="text-sm text-gray-500">
                {{ $description ?? null }}
            </p>
        @endif
    </div>
</div>
