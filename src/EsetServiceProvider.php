<?php

namespace NebsterSK\Eset;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NebsterSK\Eset\Commands\EsetCommand;

class EsetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('eset')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_eset_table')
            ->hasCommand(EsetCommand::class);
    }
}
