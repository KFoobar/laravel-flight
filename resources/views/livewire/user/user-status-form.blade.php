<section class="card">
    <div class="card-body card-cta">
        <div class="flex-grow">
            <h2 class="heading">Account status</h2>
            <div class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatibus corrupti atque repudiandae nam.
            </div>
        </div>
        <div class="flex-shrink">
            @if ($user->active)
                <x-button wire:click="deactivate" color="red">
                    Deactivate
                </x-button>
            @else
                <x-button wire:click="activate" color="green">
                    Activate
                </x-button>
            @endif
        </div>
    </div>
</section>
