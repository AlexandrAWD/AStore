<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function SignUp(Request $request)
    {
        $name = $request->post('name');
        $email = $request->post('email');

        return $name;
    }
}
