<?php

use App\Http\Controllers\VootController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vooting.id_page');
});


Route::controller(VootController::class)->group(function () {
    Route::get('/vooting', 'Vooting')->name('vooting');
    Route::post('/vooting-store', 'VootingStore')->name('vootingstore');
    Route::get('/vooting-result', 'VootingResult')->name('vootingresult');

});
