<?php
// Profile routes

Route::group(['prefix' => 'profile', 'namespace' => 'App\Services\Profile\Http\Controllers', 'middleware' => ['web', 'auth']], function () {
    
    // get the profile
    Route::get('/', 'ProfileController@show');

    // return the view to complete the profile
    Route::get('complete', 'CompleteProfile@completeProfile');

    // Submit complete level
    Route::post('level-complete', 'CompleteProfile@submitLevel');

});