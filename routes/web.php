<?php

use App\Http\Controllers\VootController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vooting.id_page');
});


Route::controller(VootController::class)->group(function () {
    Route::get('/vote', 'Vooting')->name('vooting');
    Route::post('/vote-store', 'VootingStore')->name('vootingstore');
    Route::get('/vote-result', 'VootingResult')->name('vootingresult');

    Route::post('/validate-id', 'validateID')->name('validateID');


});
