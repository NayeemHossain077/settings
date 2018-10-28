<?php

namespace Llcbd\Settings\Providers;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
        $this->publishMigration();
    }

    /**
     * Publish config file.
     *
     * @return void
     */
    public function publishConfig()
    {
        $configPath = realpath(__DIR__.'/../../config/llcbd-settings.php');
        $this->publishes([
            $configPath => config_path('llcbd-settings.php'),
        ]);
        $this->mergeConfigFrom($configPath, 'llcbd-settings');
    }

    /**
     * Publish migration file.
     *
     * @return void
     */
    public function publishMigration()
    {
        $this->publishes([
            realpath(__DIR__.'/../Migrations/') => database_path('migrations'),
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
