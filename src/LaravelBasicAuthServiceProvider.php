<?php

namespace AksService\LaravelBasicAuth;

use AksService\LaravelBasicAuth\Http\Middleware\LaravelBasicAuthMiddleware;
use Illuminate\Contracts\Container\BindingResolutionException;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Symfony\Component\HttpKernel\HttpKernel;

class LaravelBasicAuthServiceProvider extends PackageServiceProvider
{
    /**
     * @throws BindingResolutionException
     */
    public function boot(): LaravelBasicAuthServiceProvider
    {
        $this->app->make(HttpKernel::class)->pushMiddleware(LaravelBasicAuthMiddleware::class);

        return parent::boot();
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-basic-auth')
            ->hasConfigFile()
            ->hasViews();
    }
}
