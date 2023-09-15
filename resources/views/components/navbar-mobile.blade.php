<div class="space-y-1 p-3">
    <a href="#" class="block rounded-md bg-gray-900 px-2 py-2 text-sm font-medium text-white">
        Dashboard
    </a>
   @foreach ($items as $item)
      <a href="{{ $item->getUrl() }}" class="block rounded-md px-2 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
         {{ $item->getName() }}
      </a>
   @endforeach
</div>
<div class="border-t border-gray-700 space-y-1 p-3">
    <a href="#" class="block rounded-md px-2 py-2 text-sm font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
        View notifications
    </a>
</div>
<div class="border-t border-gray-700 space-y-1 p-3">
    <a href="#" class="block rounded-md px-2 py-2 text-sm font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
        Your Profile
    </a>
    <a href="#" class="block rounded-md px-2 py-2 text-sm font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
        Settings
    </a>
    <a href="#" class="block rounded-md px-2 py-2 text-sm font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
        Sign out
    </a>
</div>
