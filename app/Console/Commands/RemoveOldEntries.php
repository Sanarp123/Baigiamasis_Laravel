<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\ice;
use DB;

class RemoveOldEntries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'RemoveOldEntries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete old entries';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('ices')->where('created_at', '<', (Carbon::now()->subHours(48)))->delete();
    }
}

