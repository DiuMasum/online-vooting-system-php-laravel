<?php

use App\Http\Controllers\VootController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vooting.id_page');
});


Route::controller(VootController::class)->group(function () {
    Route::get('/general-election-vote', 'Vooting')->name('vooting');
    Route::post('/vote-store', 'VootingStore')->name('vootingstore');
    Route::get('/dashboard/vote-result', 'VootingResult')->name('vootingresult');

    Route::post('/validate-id', 'validateID')->name('validateID');

    Route::get('/vote-completed-id', 'VoteCompletedId')->name('votecompletedid');

    Route::get('/thank-you', 'ThankYou')->name('thankyou');
});
