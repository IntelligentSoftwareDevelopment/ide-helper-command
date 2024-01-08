<?php
namespace IntelligentSoftwareDevelopment\IdeHelperCommand;

use Illuminate\Support\ServiceProvider;
use IntelligentSoftwareDevelopment\IdeHelperCommand\Console\Commands\IdeHelperCommand;

class IdeHelperCommandServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerCommands();
    }

    public function boot(): void
    {

    }
    /**
     * Register the console commands for the package.
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                IdeHelperCommand::class,
            ]);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [
            IdeHelperCommand::class,
        ];
    }
}
