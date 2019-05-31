<?php
// Profile routes

Route::group(['prefix' => 'profile', 'namespace' => 'App\Services\Profile\Http\Controllers', 'middleware' => ['web', 'auth']], function () {
    
    // get the profile
    Route::get('/', 'ProfileController@show');

    // return the view to complete the profile
    Route::get('complete', 'CompleteProfile@completeProfile');

    // student complete profile
    Route::post('validate-step-1', 'CompleteProfile@validateStep1')->name('validate-step-1');

    // Student submit complete level
    Route::post('student/level-complete', 'StudentProfile@completeLevel');
});