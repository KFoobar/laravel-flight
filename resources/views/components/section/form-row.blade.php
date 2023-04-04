<div class="sm:grid sm:grid-cols-4 sm:gap-2 sm:items-start p-6">
    <label class="block text-sm font-medium text-gray-600 sm:mt-px sm:pt-2">
        {{ $label ?? null }}
    </label>
    <div class="mt-1 sm:mt-0 sm:col-span-2">
        {{ $slot ?? null }}
    </div>
</div>
