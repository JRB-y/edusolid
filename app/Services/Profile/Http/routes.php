<?php
// Profile routes

Route::group(['prefix' => 'profile', 'namespace' => 'App\Services\Profile\Http\Controllers', 'middleware' => ['web', 'auth']], function () {
    
    Route::get('complete', 'CompleteProfile@completeProfileFormStep1');

    // student complete profile
    Route::post('validate-step-1', 'CompleteProfile@validateStep1')->name('validate-step-1');

    // Student submit complete level
    Route::post('student/level-complete', 'StudentProfile@completeLevel');
});