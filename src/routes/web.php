<?php

use Williamsonwuesi\Onepasswordpassage\Http\Controllers\OnepasswordinspireController;
use Williamsonwuesi\Onepasswordpassage\Http\Controllers\OnepasswordauthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    
    Route::get('inspire', OnepasswordinspireController::class);

    Route::get('passwordless_login', [OnepasswordauthController::class, 'passage_login'])->name('passwordless_login');


    Route::group(['middleware' => ['passage_redirect_route']], function() {

        Route::get('/passage_auth', [OnepasswordauthController::class, 'AuthenticateUser']);

    });

});
