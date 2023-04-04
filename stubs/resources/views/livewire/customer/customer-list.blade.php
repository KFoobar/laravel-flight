<section class="card">
    <section class="card-header">
        <h2 class="heading">Customers</h2>
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
                <option value="">All customers</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </x-select>
            <x-select wire:model="size" class="w-auto sm:max-w-xs">
                <option value="2">2</option>
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
                    <th class="text-left">Company</th>
                    <th class="text-center">Org.nr</th>
                    <th class="text-center">Added</th>
                    <th class="text-right">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($this->items as $customer)
                    <tr>
                        <td class="w-10 pr-0">
                            <x-status color="{{ $customer->active ? 'green' : 'red' }}" />
                        </td>
                        <td class="text-left">
                            <a href="{{ route('customers.show', $customer) }}" class="link">
                                {{ $customer->company }}
                            </a>
                            <span class="block text-muted">{{ $customer->email }}</span>
                        </td>
                        <td class="text-center">
                            {{ $customer->orgnr }}
                        </td>
                        <td class="text-center">
                            {{ $customer->created_at->toDateString() }}
                        </td>
                        <td class="text-right">
                            <x-link href="{{ route('customers.show', $customer) }}">
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
