<?php

namespace AksService\LaravelBasicAuth;

use AksService\LaravelBasicAuth\Http\Middleware\LaravelBasicAuthMiddleware;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Symfony\Component\HttpKernel\HttpKernel;

class LaravelBasicAuthServiceProvider extends PackageServiceProvider
{
    public function packageBooted(): void
    {
        $this->app->booted(function ($app) {
            $middleware = $app->make(HttpKernel::class)->getMiddleware();
            $middleware[] = LaravelBasicAuthMiddleware::class;
            $app->make(HttpKernel::class)->setMiddleware($middleware);
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-basic-auth')
            ->hasConfigFile()
            ->hasViews();
    }
}
