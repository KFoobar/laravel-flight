<div class="border-b border-gray-200 p-4 sm:p-6">
    <h3 class="text-2xl leading-6 font-medium text-gray-700">
        {{ $title ?? null }}
    </h3>
    <p class="mt-2 text-sm leading-5 text-gray-400">
        {{ $slot ?? null }}
    </p>
</div>
