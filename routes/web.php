<?php

Route::get('/', function () {
    return view('site.index');
});
/**
 * 
 * Site pages
 * 
 */
Route::get('/become-tutor', 'Pages\PagesController@becomeTutor');
Route::get('/register-tutor', 'TutorAuth\RegisterController@showRegistrationForm');
Route::post('/register-tutor', 'TutorAuth\RegisterController@register')->name('register-tutor');

Auth::routes(['verify' => true]);

