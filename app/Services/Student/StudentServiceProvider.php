<?php
namespace App\Services\Student;

use Illuminate\Support\ServiceProvider;

class StudentServiceProvider extends ServiceProvider{
    
    public function register()
    {
        app()->bind('student', function(){
            return 'student';
        });
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__. '/views', 'student');
    }
}