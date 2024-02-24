<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.signIn', [
            'title' => 'Sign In',
        ]);
    }

    public function signUp()
    {
        return view('auth.signUp', [
            'title' => 'Sign Up'
        ]);
    }
}
