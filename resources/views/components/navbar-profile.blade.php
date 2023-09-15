<div class="border-b border-gray-100 px-4 pt-1.5 pb-2.5 mb-1">
    <div class="font-bold">
        {{ auth()->user()->name }}
    </div>
    <div class="text-gray-400 text-xs">
        {{ auth()->user()->email }}
    </div>
</div>
<a href="{{ route('profile') }}" class="block px-4 py-1 text-sm text-gray-700 hover:text-blue-500 font-medium" role="menuitem" tabindex="-1" id="user-menu-item-0">
    Your Profile
</a>
<a href="{{ route('profile.password') }}" class="block px-4 py-1 text-sm text-gray-700 hover:text-blue-500 font-medium" role="menuitem" tabindex="-1" id="user-menu-item-1">
    Password
</a>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="block px-4 py-1 text-sm text-gray-700 hover:text-blue-500 font-medium">
        Sing out
    </button>
</form>
