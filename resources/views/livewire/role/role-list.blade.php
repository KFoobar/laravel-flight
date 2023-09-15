<section class="card">
    <section class="card-header">
        <h2 class="heading">Roles</h2>
    </section>
    <section class="card-body card-filter">
        <div class="flex items-center justify-between space-x-4">
            <x-input wire:model="keyword" type="search" placeholder="Search..." />
            <x-select wire:model="status" class="w-auto sm:max-w-xs">
                <option value="">All roles</option>
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
                @forelse ($this->items as $role)
                    <tr>
                        <td class="w-10 pr-0">
                            <x-status color="{{ $role->active ? 'green' : 'red' }}" />
                        </td>
                        <td class="text-left">
                            <a href="{{ route('roles.show', $role) }}" class="link">
                                {{ $role->name }}
                            </a>
                             <span class="block text-muted truncate break-words">
                                {{ Str::limit($role->description, 50) }}
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="badge badge-blue">
                                {{ $role->users->count() }} st
                            </span>
                        </td>
                        <td class="text-center">
                            {{ $role->created_at->toDateString() }}
                        </td>
                        <td class="text-right">
                            <x-link href="{{ route('roles.show', $role) }}">
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
