<div x-data="{ value: @entangle($attributes->wire('model')) }">
    <label class="flex items-center border rounded-md cursor-pointer focus:outline-none p-4" class="value == '{{ $value }}' ? 'bg-blue-50 border-blue-500' : 'border-gray-300'">
        <input type="radio" name="{{ $name }}" value="{{ $value }}" x-model="value" class="h-4 w-4 text-blue-500 border-gray-300 cursor-pointer focus:ring-blue-500 mt-0.5">
        <div class="flex flex-col ml-4">
            <span class="block text-sm font-bold" :class="value == '{{ $value }}' ? 'text-blue-800' : 'text-gray-800'">
                {{ $title ?? '-' }}
            </span>
            <span class="block text-sm" :class="value == '{{ $value }}' ? 'text-blue-500' : 'text-gray-500'">
                {{ $description ?? '-' }}
            </span>
        </div>
    </label>
</div>
