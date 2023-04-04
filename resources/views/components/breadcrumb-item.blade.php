<li>
    <div class="flex items-center">
        <span class="flex-shrink-0 text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </span>
        @if (!empty($url))
            <a href="{{ $url }}" class="ml-3 text-sm font-semibold text-gray-600 hover:text-blue-500">
                {{ $slot ?? null }}
            </a>
        @else
            <span class="ml-3 text-sm font-semibold text-gray-600">
                {{ $slot ?? null }}
            </span>
        @endif
    </div>
</li>
