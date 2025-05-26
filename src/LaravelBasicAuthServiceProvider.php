<?php

namespace AksService\LaravelBasicAuth;

use AksService\LaravelBasicAuth\Http\Middleware\LaravelBasicAuthMiddleware;
use Illuminate\Support\Facades\App;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Symfony\Component\HttpKernel\HttpKernel;

class LaravelBasicAuthServiceProvider extends PackageServiceProvider
{
    public function packageBooted(): void
    {
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-basic-auth')
            ->hasConfigFile()
            ->hasViews();
    }
}
