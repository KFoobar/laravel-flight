<section class="card">
    <section class="card-header">
        <h2 class="heading">Permissions</h2>
    </section>
    <section class="card-body card-form">
        <div class="input-group">
            <div class="label">Role</div>
            <div class="sm:col-span-2">
                <fieldset class="space-y-5">
                    @foreach (App\Models\Role::active()->get() as $role)
                        <div class="relative flex items-start">
                            <div class="flex h-5 items-center">
                                <input wire:model="roles.{{ $role->id }}" id="role-{{ $role->id }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
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
    </section>
    <section class="card-footer">
        <x-button wire:click="submit">
            Save
        </x-button>
    </section>
</section>
