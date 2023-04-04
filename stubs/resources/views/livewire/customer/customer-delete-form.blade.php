<section class="card">
    <div class="card-body card-cta">
        <div class="flex-grow">
            <h2 class="heading">Delete customer</h2>
            <div class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatibus corrupti atque repudiandae nam.
            </div>
        </div>
        <div class="flex-shrink">
            <x-button wire:click="show" color="red">
                Delete
            </x-button>
        </div>
    </div>
    <x-modal wire:model="show">
        <div class="modal-heading">
            Delete customer
        </div>
        <div class="modal-body">
            Are you sure? This action is permenant.
        </div>
        <div class="modal-footer">
            <x-button wire:click="confirm" color="red">
                Delete
            </x-button>
            <x-button wire:click="cancel" color="zinc">
                Cancel
            </x-button>
        </div>
    </x-modal>
</section>
