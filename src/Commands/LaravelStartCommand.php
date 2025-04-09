<?php

namespace Itstudio\LaravelStart\Commands;

use Illuminate\Console\Command;

class LaravelStartCommand extends Command
{
    public $signature = 'laravel-start';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
