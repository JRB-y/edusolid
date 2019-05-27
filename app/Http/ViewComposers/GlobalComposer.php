<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class GlobalComposer {

 
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose( View $view )
    {
        $view->with('authUser', Auth::user());
    }

}