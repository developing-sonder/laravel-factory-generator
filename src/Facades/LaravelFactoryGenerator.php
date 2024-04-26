<?php

namespace Developing Sonder\LaravelFactoryGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Developing Sonder\LaravelFactoryGenerator\LaravelFactoryGenerator
 */
class LaravelFactoryGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Developing Sonder\LaravelFactoryGenerator\LaravelFactoryGenerator::class;
    }
}
