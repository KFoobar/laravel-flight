<section class="card">
    <section class="card-header">
        <h2 class="heading">Password</h2>
        <div class="description">
            Change your password by entering a new one.
        </div>
    </section>
    <section class="card-body card-form">
        <div class="input-group">
            <div class="label">Current password</div>
            <div class="sm:col-span-2">
                <x-input wire:model="current" type="password" />
                <x-error for="current" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">New password</div>
            <div class="sm:col-span-2">
                <x-input wire:model="password" type="password" />
                <x-error for="password" />
            </div>
        </div>
        <div class="input-group">
            <div class="label">Confirm password</div>
            <div class="sm:col-span-2">
                <x-input wire:model="password_confirmation" type="password" />
                <x-error for="password_confirmation" />
            </div>
        </div>
    </section>
    <section class="card-footer">
        <x-button wire:click="submit">
            Change password
        </x-button>
    </section>
</section>
