@if (!empty($title))
    <x-flight::container class="border-b border-gray-200 py-6">
        <h1 class="text-xl leading-6 font-bold text-gray-900">
            {{ $title }}
        </h1>
    </x-flight::container>
@endif
@if (!empty($breadcrumbs))
    <x-flight::container class="border-b border-gray-200">
        <x-flight::breadcrumbs>
            {{ $breadcrumbs }}
        </x-flight::breadcrumbs>
    </x-flight::container>
@endif
@if (!empty($tabs))
    <x-flight::container class="border-b border-gray-200">
        <x-flight::header-nav>
            {{ $tabs }}
        </x-flight::header-nav>
    </x-flight::container>
@endif
