<?php

namespace Astrogoat\Affirm\Commands;

use Illuminate\Console\Command;

class AffirmCommand extends Command
{
    public $signature = 'affirm';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
