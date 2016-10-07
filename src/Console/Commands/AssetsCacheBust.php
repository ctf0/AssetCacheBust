<?php

namespace App\Console\Commands;

use Cache;
use Carbon\Carbon;
use Illuminate\Console\Command;

class AssetsCacheBust extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:bust';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CacheBust Assets';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Cache::forever('v', Carbon::now()->timestamp);
    }
}
