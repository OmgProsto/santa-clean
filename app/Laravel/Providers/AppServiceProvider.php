<?php

namespace App\Laravel\Providers;

use App\Laravel\DI\Santa;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        foreach ((new Santa)() as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
