<?php

namespace FikriMastor\Duplicator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use FikriMastor\Duplicator\Commands\DuplicatorCommand;

class DuplicatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('duplicatable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_duplicatable_table')
            ->hasCommand(DuplicatorCommand::class);
    }
}
