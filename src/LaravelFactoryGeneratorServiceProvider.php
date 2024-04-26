<?php

namespace Developing Sonder\LaravelFactoryGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Developing Sonder\LaravelFactoryGenerator\Commands\LaravelFactoryGeneratorCommand;

class LaravelFactoryGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-factory-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-factory-generator_table')
            ->hasCommand(LaravelFactoryGeneratorCommand::class);
    }
}
