<?php
namespace App\Services\Profile;

use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider {
    
    public function register()
    {
        app()->bind('profile', function(){
            return 'profile';
        });
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__. '/views', 'profile');
    }

}