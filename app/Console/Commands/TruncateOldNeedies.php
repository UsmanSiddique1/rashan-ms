<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\NeedyHistory;

class TruncateOldNeedies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:truncateoldneedies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'we need to truncate old items';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dd("hi");
     });
        
    }
}
