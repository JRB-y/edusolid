<?php
/**
 * Created by PhpStorm.
 * User: jrb
 * Date: 6/1/19
 * Time: 6:16 PM
 */

namespace App\Services\Question;


use Illuminate\Support\ServiceProvider;

class QuestionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        // routes
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        // load views
        $this->loadViewsFrom(__DIR__. '/views', 'question');

    }

}