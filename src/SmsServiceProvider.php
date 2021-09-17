<?php

namespace Berzel\Sms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Berzel\Sms\Commands\SmsCommand;

class SmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-sms_table')
            ->hasCommand(SmsCommand::class);
    }
}
