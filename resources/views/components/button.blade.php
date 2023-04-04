<button {{ $attributes->merge([
    'role' => 'button',
    'type' => 'button',
    'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-'.$color.'-600 hover:bg-'.$color.'-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-'.$color.'-500'
]) }}>{{ $slot }}</button>
