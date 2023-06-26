<?php

namespace Williamsonwuesi\Onepasswordpassage\Http\Controllers;

use Illuminate\Http\Request;


class OnepasswordauthController{

    public function AuthenticateUser (Request $request) {
        
        return redirect('/profile');

    }

    public function passage_login (Request $request) {
        
        return view('Onepasswordpassage::passage_login');

    }

    // public function AddPassagePasskeysFromProfile (Request $request) {

    //   return view('enable_passkeys');

    // }

}