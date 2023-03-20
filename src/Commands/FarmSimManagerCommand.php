<?php

namespace Sitesurfer\FarmSimManager\Commands;

use Illuminate\Console\Command;

class FarmSimManagerCommand extends Command
{
    public $signature = 'farm-sim-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
