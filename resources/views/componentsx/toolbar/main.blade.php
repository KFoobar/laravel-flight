<div class="flex flex-1 justify-between px-6 py-3">
    <div class="flex flex-1">
        @hasSection('breadcrumbs')
            <x-breadcrumbs>
                @yield('breadcrumbs')
            </x-breadcrumbs>
        @endif
    </div>
    <div class="flex items-center space-x-4">
        <x-flight::menu.dropdown>
            <x-heroicon-o-bell class="h-6 w-6" />
            <x-slot:items>
                <x-flight::menu.dropdown-header title="Notifications" />
                <div class="text-sm text-gray-500">
                    No notifications
                </div>
            </x-slot:items>
        </x-flight::menu.dropdown>
        <x-flight::menu.dropdown>
            <x-heroicon-o-user-circle class="h-6 w-6" />
            <x-slot:items>
                <div class="font-bold">
                    {{ auth()->user()->name }}
                </div>
                <div class="text-gray-400 text-xs">
                    {{ auth()->user()->email }}
                </div>
                <x-flight::menu.dropdown-divider />
                <x-flight::menu.dropdown-item url="{{ route('profile') }}" title="Settings" />
                <x-flight::menu.dropdown-item url="{{ route('profile.password') }}" title="Security" />
                <x-flight::menu.dropdown-divider />
                <x-flight::menu.dropdown-logout url="{{ route('logout') }}" title="Logout" />
            </x-slot:items>
        </x-flight::menu.dropdown>
    </div>
</div>
