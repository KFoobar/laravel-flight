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
            <div class="label">Company</div>
            <div class="sm:col-span-2">
                <x-input wire:model="customer.company" type="text" />
                <x-error for="customer.company" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">Org.nr</div>
            <div class="sm:col-span-2">
                <x-input wire:model="customer.orgnr" type="text" />
                <x-error for="customer.orgnr" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">E-mail</div>
            <div class="sm:col-span-2">
                <x-input wire:model="customer.email" type="email" />
                <x-error for="customer.email" />
            </div>
        </div>
    </section>
    <section class="card-footer">
        <x-button wire:click="submit">
            Save
        </x-button>
    </section>
</section>
