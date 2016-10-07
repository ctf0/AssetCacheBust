<?php

namespace App\Providers;

use Cache;
use Artisan;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->autoCacheBust();
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        // ...
    }

    /**
     * auto cache bust if any file was modified.
     *
     * @return [type] [description]
     */
    protected function autoCacheBust()
    {
        $files = config('asset-cache-bust');

        if ( ! empty($files)) {
            foreach ($files as $file) {

                $creation_time = filemtime(public_path($file));

                if ($creation_time > Cache::get('v')) {
                    Artisan::call('assets:bust');
                }
            }
        }

        view()->share('v', \Cache::get('v', 0));
    }
}
