<?php namespace Vimg\Providers;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

class HashIdsServiceProvider extends ServiceProvider {


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app['HashIds'] = function($app) {
            return new Hashids(
                $app['config']['vimg']['hash-ids-salt'],
                0,
                'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789'
            );
        };
    }
}