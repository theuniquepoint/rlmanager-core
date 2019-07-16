<?php

namespace Theuniquepoint\Authenticator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthenticatorController extends Controller {
    public function getlogin() {
        return view('authenticator::login');
    }
    
    public function postlogin() {
        echo 'Login page got by POST!';
    }
}

?>