<?php
Route::group(['middleware' => ['web', 'auth', 'verified', 'profileCompleted'], 'namespace' => 'App\Services\Tutor\Http\Controllers'], function(){
    // QR
    Route::get('tutor/getAvailabilityQr', 'GoOnline@getAvailabilityQr');
    Route::post('tutor/qrGoOnline', 'GoOnline@qrGoOnline');

    // SL
    Route::get('tutor/getAvailabilitySl', 'GoOnline@getAvailabilitySl');
    Route::post('tutor/slGoOnline', 'GoOnline@slGoOnline');
});
