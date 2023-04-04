@if (!empty($match) && Route::is($match))
    <a href="{{ $url ?? null }}" class="border-primary-500 text-primary-500 whitespace-nowrap pb-4 mr-3 border-b-2 font-medium text-sm">
        {{ $name ?? null }}
    </a>
@elseif ($url == url()->current())
    <a href="{{ $url ?? null }}" class="border-primary-500 text-primary-500 whitespace-nowrap pb-4 mr-3 border-b-2 font-medium text-sm">
        {{ $name ?? null }}
    </a>
@else
    <a href="{{ $url }}" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap pb-4 mr-3 border-b-2 font-medium text-sm">
        {{ $name ?? null }}
    </a>
@endif
