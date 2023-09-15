<div class="bg-white rounded-md shadow-md border border-gray-200 overflow-hidden">
    <div class="flex items-center justify-between border-b border-gray-200 p-4">
        <div class="flex-grow text-lg text-gray-800 font-bold">
            {{ $title ?? null }}
        </div>
        <div class="flex-shrink">
            {{ $navigation ?? null }}
        </div>
    </div>
    <div class="flex items-center justify-between space-x-4 border-b border-gray-200 p-4">
        {{ $filter ?? null }}
    </div>
    <div class="">
        <table class="min-w-full divide-y divide-gray-200">
            {{ $slot ?? null }}
        </table>
    </div>
</div>
