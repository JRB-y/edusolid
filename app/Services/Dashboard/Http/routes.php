<?php
Route::group(['middleware' => ['web', 'auth', 'verified'], 'namespace' => 'App\Services\Dashboard\Http\Controllers'], function(){
    Route::get('/dashboard', 'DashboardController@index');
});
