@if (!empty($active))
    <a href="{{ $url ?? null }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">
        {{ $title ?? null }}
    </a>
@else
    <a href="{{ $url ?? null }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
        {{ $title ?? null }}
    </a>
@endif
