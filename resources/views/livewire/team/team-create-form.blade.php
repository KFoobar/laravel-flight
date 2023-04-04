<div x-data x-on:keydown.escape="$wire.close">
    <x-button wire:click="show">Create</x-button>
    <x-sidebar wire:model="show" title="Create team">
        <div class="space-y-4 p-6">
            <div class="input-group">
                <div class="label">Name</div>
                <div class="sm:col-span-3">
                    <x-input wire:model="team.name" type="text" />
                    <x-error for="team.name" />
                </div>
            </div>
            <div class="input-group">
                <div class="label">Description</div>
                <div class="sm:col-span-3">
                    <x-textarea wire:model="team.description" />
                    <x-error for="team.description" />
                </div>
            </div>
        </div>
        <x-slot:footer>
            <x-button wire:click="submit">Create</x-button>
            <x-button wire:click="close" color="zinc">Abort</x-button>
        </x-slot>
    </x-sidebar>
</div>
