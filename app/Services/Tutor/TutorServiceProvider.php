<?php
namespace App\Services\Tutor;

use Illuminate\Support\ServiceProvider;

class TutorServiceProvider extends ServiceProvider{
    
    public function register()
    {
        app()->bind('tutor', function(){
            return 'tutor';
        });
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__. '/views', 'tutor');
    }
}