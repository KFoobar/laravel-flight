<?php

namespace KFoobar\Flight;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use KFoobar\Flight\Commands\InstallCommand;
use Livewire\Livewire;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../config/flight.php' => config_path('flight.php'),
        ], 'flight-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/flight'),
        ], 'flight-views');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'flight');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadBladeComponents();
        $this->loadLivewireComponents();
    }

    private function loadBladeComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            Blade::component('status', \KFoobar\Flight\View\Components\Status::class);
            Blade::component('sidebar', \KFoobar\Flight\View\Components\Sidebar::class);
            Blade::component('modal', \KFoobar\Flight\View\Components\Modal::class);
            Blade::component('link', \KFoobar\Flight\View\Components\Link::class);

            Blade::component('toolbar', \KFoobar\Flight\View\Components\Toolbar::class);
            Blade::component('footer', \KFoobar\Flight\View\Components\Footer::class);
            Blade::component('navigation-admin', \KFoobar\Flight\View\Components\AdminNavigation::class);
            Blade::component('navigation-main', \KFoobar\Flight\View\Components\MainNavigation::class);
            Blade::component('breadcrumbs', \KFoobar\Flight\View\Components\Breadcrumb::class);
            Blade::component('breadcrumbs-item', \KFoobar\Flight\View\Components\BreadcrumbItem::class);

            Blade::component('button', \KFoobar\Flight\View\Components\Button::class);
            Blade::component('input', \KFoobar\Flight\View\Components\Input::class);
            Blade::component('textarea', \KFoobar\Flight\View\Components\Textarea::class);
            Blade::component('select', \KFoobar\Flight\View\Components\Select::class);
            Blade::component('option', \KFoobar\Flight\View\Components\Option::class);
            Blade::component('error', \KFoobar\Flight\View\Components\Error::class);
            Blade::component('hint', \KFoobar\Flight\View\Components\Hint::class);
            Blade::component('empty-row', \KFoobar\Flight\View\Components\EmptyRow::class);
            Blade::component('pagination', \KFoobar\Flight\View\Components\Pagination::class);
        });
    }

    private function loadLivewireComponents()
    {
        Livewire::component('profile-details-form', \KFoobar\Flight\Http\Livewire\Profile\ProfileDetailsForm::class);
        Livewire::component('profile-password-form', \KFoobar\Flight\Http\Livewire\Profile\ProfilePasswordForm::class);
        Livewire::component('profile-two-factor-form', \KFoobar\Flight\Http\Livewire\Profile\ProfileTwoFactorForm::class);
        Livewire::component('profile-backup-code-form', \KFoobar\Flight\Http\Livewire\Profile\ProfileBackupCodeForm::class);
        Livewire::component('two-factor-setup', \KFoobar\Flight\Http\Livewire\Profile\TwoFactorSetup::class);

        Livewire::component('user-list', \KFoobar\Flight\Http\Livewire\User\UserList::class);
        Livewire::component('user-create-form', \KFoobar\Flight\Http\Livewire\User\UserCreateForm::class);
        Livewire::component('user-edit-form', \KFoobar\Flight\Http\Livewire\User\UserEditForm::class);
        Livewire::component('user-role-form', \KFoobar\Flight\Http\Livewire\User\UserRoleForm::class);
        Livewire::component('user-status-form', \KFoobar\Flight\Http\Livewire\User\UserStatusForm::class);
        Livewire::component('user-delete-form', \KFoobar\Flight\Http\Livewire\User\UserDeleteForm::class);

        Livewire::component('team-list', \KFoobar\Flight\Http\Livewire\Team\TeamList::class);
        Livewire::component('team-create-form', \KFoobar\Flight\Http\Livewire\Team\TeamCreateForm::class);
        Livewire::component('team-edit-form', \KFoobar\Flight\Http\Livewire\Team\TeamEditForm::class);
        Livewire::component('team-delete-form', \KFoobar\Flight\Http\Livewire\Team\TeamDeleteForm::class);

        Livewire::component('role-list', \KFoobar\Flight\Http\Livewire\Role\RoleList::class);
        Livewire::component('role-edit-form', \KFoobar\Flight\Http\Livewire\Role\RoleEditForm::class);

        Livewire::component('toast-manager', \KFoobar\Flight\Http\Livewire\ToastManager::class);
    }
}
