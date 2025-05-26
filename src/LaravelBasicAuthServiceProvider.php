<?php

namespace AksService\LaravelBasicAuth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AksService\LaravelBasicAuth\Commands\LaravelBasicAuthCommand;

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
