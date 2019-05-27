<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\GlobalComposer;
use Illuminate\Contracts\View\Factory as ViewFactory;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot(ViewFactory $view)
    {
        view()->composer('*', 'App\Http\ViewComposers\GlobalComposer');
    }
}
