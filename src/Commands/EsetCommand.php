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
        File::copy(__DIR__ . '/../../assets/ray.php', config_path('ray.php'));
        File::copy(__DIR__ . '/../../assets/ziggy.php', config_path('ziggy.php'));

        // Larastan
        File::copy(__DIR__ . '/../../assets/phpstan.neon', base_path('phpstan.neon'));

        // Pint
        File::copy(__DIR__ . '/../../assets/pint.json', base_path('pint.json'));

        // ESET CSS mail theme
        if (!File::exists(resource_path('views/vendor/mail/html/themes'))) {
            File::makeDirectory(resource_path('views/vendor/mail/html/themes'), recursive: true);
        }
        File::copy(__DIR__ . '/../../assets/eset.css', resource_path('views/vendor/mail/html/themes/eset.css'));

        // Traits
        if (!File::exists(app_path('Traits'))) {
            File::makeDirectory(app_path('Traits'));
        }
        File::copy(__DIR__ . '/../../assets/EnumEnhancements.php', base_path('app/Traits/EnumEnhancements.php'));

        return self::SUCCESS;
    }
}
