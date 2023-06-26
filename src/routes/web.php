<?php

use Williamsonwuesi\Onepasswordpassage\Controllers\Http\OnepasswordinspireController;
use Williamsonwuesi\Onepasswordpassage\Controllers\Http\OnepasswordauthController;
use Illuminate\Support\Facades\Route;


// Route::get('inspire', OnepasswordinspireController::class);

Route::view('passwordless_login', 'passage_login')->name('passwordless_login');


Route::group(['middleware' => ['passage_redirect_route']], function() {

    Route::get('/{token}/dashboard', [OnepasswordauthController::class, 'AuthenticateUser']);
    // Route::get('/{token}/profile', [OnepasswordauthController::class, 'RedirectToProfile'])->middleware('passage');

});