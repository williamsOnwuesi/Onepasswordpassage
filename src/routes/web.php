<?php

use Williamsonwuesi\Onepasswordpassage\Http\Controllers\OnepasswordinspireController;
use Williamsonwuesi\Onepasswordpassage\Http\Controllers\OnepasswordauthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    
    Route::get('inspire', OnepasswordinspireController::class)->middleware('auth');

    Route::get('passwordless_login', [OnepasswordauthController::class, 'passage_login'])->name('passwordless_login');

    Route::group(['middleware' => ['passage_redirect_route']], function() {

        Route::get('/passage_auth', [OnepasswordauthController::class, 'AuthenticateUser']);

    });

    Route::get('enable_passkeys', [OnepasswordauthController::class, "AddPassagePasskeysFromProfile"])
    ->middleware('auth')->name('enable_passkeys');

});
