<?php

namespace XEngine\PVPGN\Providers;

use Illuminate\Support\ServiceProvider;
use Flarum\Core\User;
use XEngine\PVPGN\Hashers\PVPGNHasher;

class PVPGNHashingAlgorithmProvider extends ServiceProvider{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        User::setHasher(new PVPGNHasher);
    }

    public function register()
    {
        //does nothing
    }
}