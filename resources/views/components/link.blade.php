<a {{ $attributes->merge([
    'href' => '#',
    'class' => 'inline-flex items-center px-2.5 py-1.5 border border-transparent rounded-md text-gray-400 hover:text-blue-500 text-sm font-medium bg-gray-50 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500'
]) }}>{{ $slot ?? 'Edit' }}</a>
