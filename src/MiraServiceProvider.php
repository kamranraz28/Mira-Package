<?php
namespace Kamran\Mira;

use Illuminate\Support\ServiceProvider;

class MiraServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'mira');
    }

    public function register()
    {
        //
    }
}
