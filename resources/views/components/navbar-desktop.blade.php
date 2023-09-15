<div class="flex space-x-4">
   @foreach ($items as $item)
      <a href="{{ $item->getUrl() }}" class="{{ Route::is($item->getPattern()) ? 'text-white bg-gray-900' : 'text-gray-300' }} group flex items-center whitespace-nowrap rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white">
         @if ($item->hasIcon())
            <x-dynamic-component :component="$item->getIcon()" class="{{ Route::is($item->getPattern()) ? 'text-blue-600' : 'text-gray-600' }} mr-2 flex-shrink-0 h-5 w-5" />
         @endif
         {{ $item->getName() }}
      </a>
   @endforeach
</div>
