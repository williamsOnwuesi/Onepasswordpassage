<?php

namespace Williamsonwuesi\Onepasswordpassage\Controllers;

use Illuminate\Http\Request;
use Williamsonwuesi\Onepasswordpassage\Authenticate;

class OnepasswordauthController{

    public function __invoke(Authenticate $authenticate) {

        $message = $authenticate->login();

        // return $message;

        return view('Onepasswordpassage::index', compact('message'));

    }

}