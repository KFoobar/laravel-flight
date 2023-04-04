<textarea {{ $attributes->merge([
    'rows'         => '4',
    'name'         => '',
    'placeholder'  => '',
    'class'        => 'block w-full rounded-lg shadow-sm bg-white border border-gray-300 p-2 focus:outline-none focus:border-blue-500 focus:ring-blue-500'
    ]) }}>{{ $slot }}</textarea>
