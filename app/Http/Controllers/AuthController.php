<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.signIn', [
            'title' => 'Sign In',
        ]);
    }

    public function signInForm(Request $request)
    {
        $credentials = [

        ];
    }

    public function signUp()
    {
        return view('auth.signUp', [
            'title' => 'Sign Up'
        ]);
    }

    public function signUpForm(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('/signin')->with('success', 'Registration Success');
    }
}
