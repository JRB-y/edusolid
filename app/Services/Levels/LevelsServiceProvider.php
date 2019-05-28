<?php
namespace App\Services\Levels;

use Illuminate\Support\ServiceProvider;
use App\Services\Dashboard\Dashboard;

class LevelsServiceProvider extends ServiceProvider{
    
    public function register()
    {
        app()->bind('level', function(){
            return 'level';
        });
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__. '/views', 'level');
    }

}