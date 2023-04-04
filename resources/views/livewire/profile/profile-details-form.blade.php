<section class="card">
    <section class="card-header">
        <h2 class="heading">Settings</h2>
        <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
        </div>
    </section>
    <section class="card-body card-form">
        <div class="input-group">
            <div class="label">Name</div>
            <div class="sm:col-span-2">
                <x-input wire:model="user.name" type="text" />
                <x-error for="user.name" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">Job title</div>
            <div class="sm:col-span-2">
                <x-input wire:model="user.title" type="text" />
                <x-error for="user.title" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">E-mail</div>
            <div class="sm:col-span-2">
                <x-input wire:model="user.email" type="email" />
                <x-error for="user.email" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">Phone</div>
            <div class="sm:col-span-2">
                <x-input wire:model="user.phone" type="text" />
                <x-error for="user.phone" />
            </div>
        </div>
    </section>
    <section class="card-footer">
        <x-button wire:click="submit">
            Save
        </x-button>
    </section>
</section>
