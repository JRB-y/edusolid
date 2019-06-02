<?php
/**
 * routes for Student
 * @package App\Services\Student
 *
 */
Route::group(['middleware' => ['web', 'auth', 'profileCompleted'], 'prefix' => 'student', 'namespace' => 'App\Services\Student\Http\Controllers'], function(){
    Route::get('new-question', 'NewQuestion@getFormNewQuestion')->name('student.new-question');
});