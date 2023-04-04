<div class="flex items-center justify-between space-x-4 p-4">
    <input wire:model="keyword" type="search" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
    {{ $slot ?? null }}
</div>
