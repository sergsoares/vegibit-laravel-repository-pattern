<?php

namespace App\repotutrepositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->app->bind(
            'App\repotutrepositories\HouseRepositoryInterface',
            'App\repotutrepositories\FileHouseRepository');
    }
}