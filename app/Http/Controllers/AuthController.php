<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('error', 'check your username or password again');
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

        if(!$validated['username']) {
            return view('failed');
        }

        User::create($validated);
        return redirect('/signin')->with('success', 'Registration Success');
    }

    public function signOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
