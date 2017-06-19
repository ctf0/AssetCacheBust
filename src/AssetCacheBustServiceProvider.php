<?php

namespace ctf0\AssetCacheBust;

use Illuminate\Support\ServiceProvider;

class AssetCacheBustServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        require_once 'CacheBust.php';
    }

    /**
     * Register any package services.
     */
    public function register()
    {
    }
}
