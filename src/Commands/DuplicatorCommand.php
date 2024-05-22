<?php

namespace FikriMastor\Duplicator\Commands;

use Illuminate\Console\Command;

class DuplicatorCommand extends Command
{
    public $signature = 'duplicatable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
