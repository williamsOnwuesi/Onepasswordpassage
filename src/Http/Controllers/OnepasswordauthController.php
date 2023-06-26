<?php

namespace Williamsonwuesi\Onepasswordpassage\Http\Controllers;

use Illuminate\Http\Request;
use Williamsonwuesi\Onepasswordpassage\Authenticate;

class OnepasswordauthController{

    public function AuthenticateUser (Request $request, $token) {
        
        return redirect('/profile');

    }


    // public function AddPassagePasskeysFromProfile (Request $request) {

    //   return view('enable_passkeys');

    // }

}