<section class="card">
    <section class="card-header">
        <h2 class="heading">Settings</h2>
    </section>
    <section class="card-body card-form">
        <div class="input-group">
            <div class="label">Name</div>
            <div class="sm:col-span-2">
                <x-input wire:model="role.name" type="text" />
                <x-error for="role.name" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">Description</div>
            <div class="sm:col-span-2">
                <x-textarea wire:model="role.description" type="text" />
                <x-error for="role.description" />
            </div>
        </div>
    </section>
    <section class="card-footer">
        <x-button wire:click="submit">
            Save
        </x-button>
    </section>
</section>
