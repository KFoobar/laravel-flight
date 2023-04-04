<div x-data x-on:keydown.escape="$wire.close">
    <x-button wire:click="show">Create</x-button>
    <x-sidebar wire:model="show" title="Create user">
        <div class="space-y-4 p-6">
            <div class="input-group">
                <div class="label">Name</div>
                <div class="sm:col-span-3">
                    <x-input wire:model="user.name" type="text" />
                    <x-error for="user.name" />
                </div>
            </div>
            <div class="input-group">
                <div class="label">E-mail</div>
                <div class="sm:col-span-3">
                    <x-input wire:model="user.email" type="email" />
                    <x-error for="user.email" />
                </div>
            </div>
            <div class="input-group">
                <div class="label">Phone</div>
                <div class="sm:col-span-3">
                    <x-input wire:model="user.phone" type="text" />
                    <x-error for="user.phone" />
                </div>
            </div>
            <div class="input-group">
                <div class="label">Role</div>
                <div class="sm:col-span-3">
                    <fieldset class="rounded-lg border bg-gray-50 space-y-5 p-4">
                        @foreach ($this->activeRoles as $role)
                            <div class="relative flex items-start">
                                <div class="flex h-5 items-center">
                                    <input wire:model.defer="roles.{{ $role->id }}" id="role-{{ $role->id }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="role-{{ $role->id }}" class="font-medium text-gray-700">{{ $role->name }}</label>
                                    <p class="text-gray-500">{{ $role->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </fieldset>
                    <x-error for="roles" />
                </div>
            </div>
        </div>
        <x-slot:footer>
            <x-button wire:click="submit">Create</x-button>
            <x-button wire:click="close" color="zinc">Abort</x-button>
        </x-slot>
    </x-sidebar>
</div>
