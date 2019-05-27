<?php
namespace App\Services\Dashboard;

use Illuminate\Support\ServiceProvider;
use App\Services\Dashboard\Dashboard;

class DashboardServiceProvider extends ServiceProvider{
    
    public function register()
    {
        app()->bind('dashboard', function(){
            return 'dashboard';
        });
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__. '/views', 'dashboard');
    }

}