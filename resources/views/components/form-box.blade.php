<div class="bg-white rounded-md shadow-md border border-gray-200 overflow-hidden mb-8">
    <div class="flex items-center justify-between border-b border-gray-200 p-4">
        <div class="flex-grow text-lg text-gray-800 font-bold">
            {{ $title ?? null }}
        </div>
        <div class="flex-shrink">
            {{ $navigation ?? null }}
        </div>
    </div>
    <div class="min-w-full divide-y divide-gray-200">
        {{ $slot ?? null }}
    </div>
</div>
