<?php

namespace Sitesurfer\FarmSimManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sitesurfer\FarmSimManager\Commands\FarmSimManagerCommand;

class FarmSimManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('farm-sim-manager')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_farm-sim-manager_table')
            ->hasCommand(FarmSimManagerCommand::class);
    }
}
