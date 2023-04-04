<?php

namespace KFoobar\Flight\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flight:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs Laravel Flight resources';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->components->info('Installing Laravel Flight...');

        $this->directories();
        $this->stubs();

        $this->composer([
            "blade-ui-kit/blade-heroicons:^2.0",
            "doctrine/dbal:^3.4",
            "kfoobar/laravel-uuid:^1.0",
            "laravel/fortify:^1.15",
            "livewire/livewire:^2.5",
        ]);

        $this->node([
            '@alpinejs/focus' => '^3.10.5',
            '@tailwindcss/forms' => '^0.5.2',
            '@tailwindcss/typography' => '^0.5.0',
            'alpinejs' => '^3.0.6',
            'autoprefixer' => '^10.4.7',
            'postcss' => '^8.4.14',
            'tailwindcss' => '^3.1.0',
        ]);

        $this->components->info('Laravel Flight installed successfully!');
    }

    private function directories()
    {
        $this->components->info('Installing directories...');

        (new Filesystem)->ensureDirectoryExists(app_path('Actions/Customer'));
        (new Filesystem)->ensureDirectoryExists(app_path('Http/Controllers/Customer'));
        (new Filesystem)->ensureDirectoryExists(app_path('Http/Livewire/Customer'));
        (new Filesystem)->ensureDirectoryExists(app_path('Models/Customer'));
        (new Filesystem)->ensureDirectoryExists(resource_path('css'));

        (new Filesystem)->deleteDirectory(resource_path('sass'));
    }

    private function stubs()
    {
        $this->components->info('Installing stubs...');

        copy(__DIR__ . '/../../stubs/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__ . '/../../stubs/postcss.config.js', base_path('postcss.config.js'));
        copy(__DIR__ . '/../../stubs/vite.config.js', base_path('vite.config.js'));

        copy(__DIR__ . '/../../stubs/database/migrations/2022_12_20_100100_create_customers_table.php', base_path('database/migrations/2022_12_20_100100_create_customers_table.php'));

        copy(__DIR__ . '/../../stubs/resources/css/app.css', resource_path('css/app.css'));
        copy(__DIR__ . '/../../stubs/resources/js/app.js', resource_path('js/app.js'));

        copy(__DIR__ . '/../../stubs/routes/web.php', base_path('routes/web.php'));

        copy(__DIR__ . '/../../stubs/app/Providers/FlightServiceProvider.php', app_path('Providers/FlightServiceProvider.php'));
        copy(__DIR__ . '/../../stubs/app/Providers/FortifyServiceProvider.php', app_path('Providers/FortifyServiceProvider.php'));
        copy(__DIR__ . '/../../stubs/app/Models/Role.php', app_path('Models/Role.php'));
        copy(__DIR__ . '/../../stubs/app/Models/Team.php', app_path('Models/Team.php'));
        copy(__DIR__ . '/../../stubs/app/Models/User.php', app_path('Models/User.php'));

        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/app/Actions/Customer', app_path('Actions/Customer'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/app/Actions/Fortify', app_path('Actions/Fortify'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/app/Http/Controllers/Customer', app_path('Http/Controllers/Customer'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/app/Http/Livewire/Customer', app_path('Http/Livewire/Customer'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/app/Models/Customer', app_path('Models/Customer'));

        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/resources/css/flight', resource_path('css/flight'));

        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/resources/views/customer', resource_path('views/customer'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/resources/views/dashboard/', resource_path('views/dashboard'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/resources/views/layouts', resource_path('views/layouts'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/resources/views/livewire', resource_path('views/livewire'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/resources/views/system', resource_path('views/system'));

        (new Filesystem)->delete(resource_path('views/welcome.blade.php'));
    }

    private function composer(array $packages)
    {
        $this->components->info('Installing Composer packages...');

        $command = array_merge(['composer', 'require'], $packages);

        $this->runProcess(
            array_merge(['composer', 'require'], $packages),
            ['COMPOSER_MEMORY_LIMIT' => '-1']
        );
    }

    private function node(array $packages, bool $dev = false)
    {
        $this->components->info('Installing Node packages...');

        $key = $dev ? 'devDependencies' : 'dependencies';

        $content = json_decode(file_get_contents(base_path('package.json')), true);

        foreach ($packages as $package => $version) {
            if (!array_key_exists($key, $content)) {
                $content[$key] = [];
            }

            $content[$key][$package] = $version;
        }

        ksort($content[$key]);

        file_put_contents(
            base_path('package.json'),
            json_encode($content, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . PHP_EOL
        );

        $this->runProcess(['npm', 'install']);
        $this->runProcess(['npm', 'run', 'build']);
    }

    private function runProcess(array $commands, array $options = [])
    {
        (new Process($commands, base_path(), $options))
            ->setTimeout(null)
            ->run(function ($type, $output) {
                $this->output->write($output);
            });
    }
}
