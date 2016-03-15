<?php

namespace CodeDelivery\Commands;

use CodeDelivery\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class PostCommand extends Command implements SelfHandling
{
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
