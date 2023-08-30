<?php

namespace NebsterSK\Eset;

use NebsterSK\Eset\Commands\EsetCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EsetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('eset')
            ->hasCommand(EsetCommand::class);
    }
}
