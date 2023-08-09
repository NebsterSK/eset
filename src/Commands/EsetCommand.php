<?php

namespace NebsterSK\Eset\Commands;

use Illuminate\Console\Command;

class EsetCommand extends Command
{
    public $signature = 'eset';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
