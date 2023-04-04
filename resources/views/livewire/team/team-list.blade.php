<section class="card">
    <section class="card-header">
        <h2 class="heading">Teams</h2>
        <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
        </div>
    </section>
    <section class="card-body card-filter">
        <div class="flex items-center justify-between space-x-4">
            <x-input wire:model="keyword" type="search" placeholder="Search..." />
            <x-select wire:model="status" class="w-auto sm:max-w-xs">
                <option value="">All teams</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </x-select>
            <x-select wire:model="size" class="w-auto sm:max-w-xs">
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </x-select>
        </div>
    </section>
    <section class="card-body card-table">
        <table>
            <thead>
                <tr>
                    <th class="w-10 pr-0"></th>
                    <th class="text-left">Name</th>
                    <th class="text-center">Users</th>
                    <th class="text-center">Added</th>
                    <th class="text-right">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($this->items as $team)
                    <tr>
                        <td class="w-10 pr-0">
                            <x-status color="{{ $team->active ? 'green' : 'red' }}" />
                        </td>
                        <td class="text-left">
                            <a href="{{ route('teams.show', $team) }}" class="link">
                                {{ $team->name }}
                            </a>
                             <span class="block text-muted truncate break-words">
                                {{ Str::limit($team->description, 50) }}
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="badge badge-blue">
                                {{ $team->users->count() }} st
                            </span>
                        </td>
                        <td class="text-center">
                            {{ $team->created_at->toDateString() }}
                        </td>
                        <td class="text-right">
                            <x-link href="{{ route('teams.show', $team) }}">
                                Edit
                            </x-link>
                        </td>
                    </tr>
                @empty
                    <x-empty-row />
                @endforelse
            </tbody>
            <tfoot>
                <x-pagination :items="$this->items" />
            </tfoot>
        </table>
    </section>
</section>
