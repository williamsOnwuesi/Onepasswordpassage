<?php

namespace Williamsonwuesi\Onepasswordpassage\Http\Controllers;

use Illuminate\Http\Request;
use Williamsonwuesi\Onepasswordpassage\Authenticate;

class OnepasswordinspireController{

    public function __invoke(Authenticate $authenticate) {

        $message = $authenticate->login();

        // return $message;

        return view('Onepasswordpassage::index', compact('message'));

    }
    
}