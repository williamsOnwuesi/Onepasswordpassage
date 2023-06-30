<?php

namespace Williamsonwuesi\Onepasswordpassage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OnepasswordauthController{

    public function AuthenticateUser (Request $request) {
        
        return redirect('/dashboard');

    }

    public function passage_login (Request $request) {
        
        return view('Onepasswordpassage::passage_login');

    }

    public function AddPassagePasskeysFromProfile (Request $request) {

      return view('Onepasswordpassage::enable_passkeys');

    }

}