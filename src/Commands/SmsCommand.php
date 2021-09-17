<?php

namespace Berzel\Sms\Commands;

use Illuminate\Console\Command;

class SmsCommand extends Command
{
    public $signature = 'laravel-sms';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
