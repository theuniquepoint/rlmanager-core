<?php

namespace Theuniquepoint\Authenticator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthenticatorController extends Controller {
    public function authenticator() {
        echo 'Hello from the authenticator package!';
        return view('authenticator::authenticator');
    }
}

?>