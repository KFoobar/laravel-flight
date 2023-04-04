<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-body">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <script defer src="https://unpkg.com/@alpinejs/ui@3.10.5-beta.8/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/@alpinejs/focus@3.10.5/dist/cdn.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
    </head>
    <body class="antialiased h-full bg-body darks">
        <aside class="fixed inset-y-0 flex w-64 flex-col">
            <div class="flex min-h-0 flex-1 flex-col bg-gray-800">
                <div class="flex flex-1 flex-col overflow-y-auto pb-4">
                    <div class="flex h-14 flex-shrink-0 items-center px-4">
                        <a href="{{ route('dashboard') }}" class="text-xl font-bold text-white">
                            {{ config('app.name', 'Laravel Flight') }}
                        </a>
                    </div>
                    <x-navigation-main :groups="$navigationGroups" />
                    <x-navigation-admin />
                </div>
            </div>
        </aside>
        <div class="flex flex-col pl-64">
            <header class="sticky top-0 z-10 bg-white shadow">
                <x-toolbar />
            </header>
            <div class="flex-1 py-12">
                <main class="mx-auto xl:max-w-7xl px-4 sm:px-8">
                    @hasSection('breadcrumbs')
                        <x-breadcrumbs>
                            @yield('breadcrumbs')
                        </x-breadcrumbs>
                    @endif
                    @yield('content')
                </main>
                <footer class="mx-auto xl:max-w-7xl px-4 sm:px-8">
                    <x-footer>
                        &nbsp;
                    </x-footer>
                </footer>
            </div>
        </div>
        @livewire('toast-manager')
        @stack('modals')
        @stack('scripts')
    </body>
</html>
