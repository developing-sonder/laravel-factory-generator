<?php

namespace Developing Sonder\LaravelFactoryGenerator\Commands;

use Illuminate\Console\Command;

class LaravelFactoryGeneratorCommand extends Command
{
    public $signature = 'laravel-factory-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
