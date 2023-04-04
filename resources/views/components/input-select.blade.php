<select {{ $attributes->merge([
    'name'         => '',
    'autocomplete' => 'new-password',
    'class'        => 'block w-full rounded-lg shadow-sm bg-white border border-gray-300 pl-3 pr-10 py-2 focus:outline-none focus:border-blue-500 focus:ring-blue-500'
    ]) }}>{{ $slot }}</select>
