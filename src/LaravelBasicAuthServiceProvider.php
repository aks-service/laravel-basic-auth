<?php

namespace AksService\LaravelBasicAuth;

use AksService\LaravelBasicAuth\Commands\LaravelBasicAuthCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBasicAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-basic-auth')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_basic_auth_table')
            ->hasCommand(LaravelBasicAuthCommand::class);

    }
}
