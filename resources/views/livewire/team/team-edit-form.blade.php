<section class="card">
    <section class="card-header">
        <h2 class="heading">Settings</h2>
    </section>
    <section class="card-body card-form">
        <div class="input-group">
            <div class="label">Name</div>
            <div class="sm:col-span-2">
                <x-input wire:model="team.name" type="text" />
                <x-error for="team.name" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">Description</div>
            <div class="sm:col-span-2">
                <x-textarea wire:model="team.description" type="text" />
                <x-error for="team.description" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">Status</div>
            <div class="sm:col-span-2">
                <x-select wire:model="team.active">
                    <x-option value="1">Active</x-option>
                    <x-option value="0">Inactive</x-option>
                </x-select>
                <x-error for="team.active" />
            </div>
        </div>
    </section>
    <section class="card-footer">
        <x-button wire:click="submit">
            Save
        </x-button>
    </section>
</section>
