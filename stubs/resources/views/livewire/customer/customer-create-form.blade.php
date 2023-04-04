<div x-data x-on:keydown.escape="$wire.close">
    <x-button wire:click="show">Create</x-button>
    <x-sidebar wire:model="show" title="Create customer">
        <div class="space-y-4 p-6">
            <div class="input-group">
                <div class="label">Orgnr.</div>
                <div class="sm:col-span-3">
                    <x-input wire:model="customer.orgnr" type="text" />
                    <x-error for="customer.orgnr" />
                </div>
            </div>
            <div class="input-group">
                <div class="label">Name</div>
                <div class="sm:col-span-3">
                    <x-input wire:model="customer.company" type="text" />
                    <x-error for="customer.company" />
                </div>
            </div>
            <div class="input-group">
                <div class="label">E-mail</div>
                <div class="sm:col-span-3">
                    <x-input wire:model="customer.email" type="email" />
                    <x-error for="customer.email" />
                </div>
            </div>
        </div>
        <x-slot:footer>
            <x-button wire:click="submit">Create</x-button>
            <x-button wire:click="close" color="zinc">Abort</x-button>
        </x-slot>
    </x-sidebar>
</div>
