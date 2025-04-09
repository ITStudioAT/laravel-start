<?php

namespace Itstudio\LaravelStart;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Itstudio\LaravelStart\Commands\LaravelStartCommand;

class LaravelStartServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-start')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_start_table')
            ->hasCommand(LaravelStartCommand::class);
    }
}
