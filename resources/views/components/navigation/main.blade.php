<nav class="flex-1 space-y-1 bg-gray-800 px-2">
    @inject('builder', 'App\Services\Flight\NavigationBuilder')
    @foreach ($builder->getGroups() as $groups)
        @if (!empty($groups->getName()))
            <h3 class="px-2 text-sm text-gray-500 font-medium">
                {{ $groups->getName() }}
            </h3>
        @endif
        <div class="space-y-1" >
            @foreach ($groups->getItems() as $item)
                <a href="{{ $item->getUrl() }}" class="{{ Route::is($item->getPattern()) ? 'text-white' : 'text-gray-400' }} hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    @if ($item->hasIcon())
                        <x-dynamic-component :component="$item->getIcon()" class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" />
                    @endif
                    <span class="flex-1">{{ $item->getName() }}</span>
                    @if ($item->hasCounter())
                        <span class="text-white text-xs font-medium bg-gray-900 group-hover:bg-gray-800 ml-3 inline-block py-0.5 px-3 rounded-full">
                            {{ $item->getCounter() }}
                        </span>
                    @endif
                </a>
            @endforeach
        </div>
    @endforeach
</nav>
