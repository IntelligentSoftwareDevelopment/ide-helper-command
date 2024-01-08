<?php
namespace IntelligentSoftwareDevelopment\IdeHelperCommand\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Symfony\Component\Console\Command\Command as CommandAlias;

class IdeHelperCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laravel IDE Helper command for models';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $model = $this->argument('model');
        $model = Str::replace('/', '\\', $model);
        echo exec('php artisan ide-helper:models -R -W "' . $model . '"');

        return CommandAlias::SUCCESS;
    }
}
