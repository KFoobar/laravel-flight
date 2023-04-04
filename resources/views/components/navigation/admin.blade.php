<nav class="space-y-1 px-2">
    <h3 class="px-2 text-sm text-gray-500 font-medium" id="projects-headline">
        Administration
    </h3>
    <div class="space-y-1">
        <a href="{{ route('roles') }}" class="{{ Route::is('roles*') ? 'text-white' : 'text-gray-400' }} hover:bg-gray-700 hover:text-white group flex items-center px-2 py-1 text-sm font-medium rounded-md">
            <x-heroicon-o-shield-check class="text-gray-300 mr-2 flex-shrink-0 h-4 w-4" />
            <span class="flex-1">Roles</span>
            <span class="text-white text-xs font-medium bg-gray-900 group-hover:bg-gray-800 ml-3 inline-block py-0.5 px-3 rounded-full">
                {{ App\Models\Role::count() }}
            </span>
        </a>
        <a href="{{ route('teams') }}" class="{{ Route::is('teams*') ? 'text-white' : 'text-gray-400' }} hover:bg-gray-700 hover:text-white group flex items-center px-2 py-1 text-sm font-medium rounded-md">
            <x-heroicon-o-user-group class="text-gray-300 mr-2 flex-shrink-0 h-4 w-4" />
            <span class="flex-1">Teams</span>
            <span class="text-white text-xs font-medium bg-gray-900 group-hover:bg-gray-800 ml-3 inline-block py-0.5 px-3 rounded-full">
                {{ App\Models\Team::count() }}
            </span>
        </a>
        <a href="{{ route('users') }}" class="{{ Route::is('users*') ? 'text-white' : 'text-gray-400' }} hover:bg-gray-700 hover:text-white group flex items-center px-2 py-1 text-sm font-medium rounded-md">
            <x-heroicon-o-user class="text-gray-300 mr-2 flex-shrink-0 h-4 w-4" />
            <span class="flex-1">Users</span>
            <span class="text-white text-xs font-medium bg-gray-900 group-hover:bg-gray-800 ml-3 inline-block py-0.5 px-3 rounded-full">
                {{ App\Models\User::count() }}
            </span>
        </a>
    </div>
    <div class="space-y-1">
        <div class="border-t border-gray-600 my-4 -mx-2"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-gray-300 bg-gray-700 hover:bg-blue-800 hover:text-white group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
                    <x-heroicon-o-arrow-right-on-rectangle class="text-gray-300 mr-2 flex-shrink-0 h-4 w-4" />
                    <span class="truncate">Logout</span>
            </button>
        </form>
    </div>
</nav>
