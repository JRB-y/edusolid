<?php
/**
 * Created by PhpStorm.
 * User: jrb
 * Date: 6/1/19
 * Time: 8:15 PM
 * Description: routes for @package  App\Services\Question
 */
Route::group(['middleware' => ['web', 'auth', 'profileCompleted'], 'prefix' => 'question', 'namespace' => 'App\Services\Question\Http\Controllers'], function(){

    // student ask a question
    Route::post('/', 'QuestionController@askQuestion');

});

