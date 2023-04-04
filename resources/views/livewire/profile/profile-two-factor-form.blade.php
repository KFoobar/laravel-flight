@if (auth()->user()->hasEnabledTwoFactorAuthentication())
    <section class="card">
        <div class="card-body card-cta">
            <div class="flex-grow">
                <h2 class="heading">Two-factor authentication</h2>
                <div class="description">
                    Turning off two-factor authentication will remove an extra
                    layer of security on your account.
                </div>
            </div>
            <div class="flex-shrink">
                <x-button wire:click="show" color="red">
                    Remove
                </x-button>
            </div>
        </div>
        <x-modal wire:model="show">
            <div class="modal-heading">
                Remove two-factor authentication
            </div>
            <div class="modal-body">
                Are you sure?
            </div>
            <div class="modal-footer">
                <x-button wire:click="confirm" color="red">
                    Remove
                </x-button>
                <x-button wire:click="cancel" color="zinc">
                    Cancel
                </x-button>
            </div>
        </x-modal>
    </section>
@else
    <section class="card">
        <div class="card-body card-cta">
            <div class="flex-grow">
                <h2 class="heading">Two-factor authentication</h2>
                <div class="description">
                    Secure your account by making sure you have a strong password and
                    two-factor authentication enabled.
                </div>
            </div>
            <div class="flex-shrink">
                <a href="{{ route('profile.two-factor') }}" class="btn-blue">
                    Activate
                </a>
            </div>
        </div>
    </section>
@endif
