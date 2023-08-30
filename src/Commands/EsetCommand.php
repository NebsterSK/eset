<?php

namespace NebsterSK\Eset\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class EsetCommand extends Command
{
    public $signature = 'eset:publish';

    public $description = 'Publish common assets for LWS projects.';

    public function handle(): int
    {
        // Config files
        File::copy(__DIR__ . '/../config/ray.php', config_path('ray.php'));
        File::copy(__DIR__ . '/../config/ziggy.php', config_path('ziggy.php'));

        // Larastan
        File::copy(__DIR__ . '/../phpstan.neon', base_path('phpstan.neon'));

        // Pint
        File::copy(__DIR__ . '/../pint.json', base_path('pint.json'));

        // Traits
        if (!file_exists(app_path('Traits'))) {
            mkdir(app_path('Traits'));
        }
        File::copy(__DIR__ . '/../app/Traits/EnumEnhancements.php', base_path('app/Traits/EnumEnhancements.php'));

        return self::SUCCESS;
    }
}
