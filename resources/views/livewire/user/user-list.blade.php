<section class="card">
    <section class="card-header">
        <h2 class="heading">Users</h2>
    </section>
    <section class="card-body card-filter">
        <div class="flex items-center justify-between space-x-4">
            <x-input wire:model="keyword" type="search" placeholder="Search..." />
            <x-select wire:model="status" class="w-auto sm:max-w-xs">
                <option value="">All customers</option>
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
                    <th class="text-center">Role</th>
                    <th class="text-center">Added</th>
                    <th class="text-right">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($this->items as $user)
                    <tr>
                        <td class="w-10 pr-0">
                            <x-status color="{{ $user->active ? 'green' : 'red' }}" />
                        </td>
                        <td class="text-left">
                            <a href="{{ route('users.show', $user) }}" class="link">
                                {{ $user->name }}
                            </a>
                            <span class="block text-muted">{{ $user->email }}</span>
                        </td>
                        <td class="text-center">
                            @if ($user->hasRoles())
                                <span class="badge badge-blue">
                                    {{ $user->getMainRole()->name }}
                                </span>
                                @if ($count = $user->countRoles(-1))
                                    <span class="badge badge-blue">
                                        +{{ $count }}
                                    </span>
                                @endif
                            @else
                                -
                            @endif
                        </td>
                        <td class="text-center">
                            {{ $user->created_at->toDateString() }}
                        </td>
                        <td class="text-right">
                            <x-link href="{{ route('users.show', $user) }}">
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
