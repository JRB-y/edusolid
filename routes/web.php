<?php

Route::get('/', function () {
    return view('site.index');
});
/**
 * 
 * Site pages
 * 
 */
Route::get('/register-tutor', 'TutorAuth\RegisterController@showRegistrationForm');
Route::post('/register-tutor', 'TutorAuth\RegisterController@register')->name('register-tutor');

/**
 * register a Tutor "form"
 */
Route::get('/become-tutor', 'Pages\PagesController@becomeTutor');

Auth::routes(['verify' => true]);

