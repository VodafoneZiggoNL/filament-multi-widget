<?php

namespace VodafoneZiggoNL\MultiWidget;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MultiWidgetServiceProvider extends PackageServiceProvider
{
    public static string $name = 'multi-widget';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews();
    }
}
