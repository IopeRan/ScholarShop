<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.profile', [
            'title' => 'Profile',
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $rules = [
            'fullname' => 'required',
            'username' => 'required',
            'image' => 'file|mimes:png,jpg,jpeg|max:2000'
        ];

        if ($request->hasFile('image')) {
            $rules['image'] = 'file';
        }

        $validated = $request->validate($rules);
        $validated['email'] = $user->email;
        $validated['whatsapp'] = $user->whatsapp;

        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('user-images');
        }

        User::where('id', $user->id)
            ->update($validated);

        return redirect()->back()->with('success', 'Profile Updated');
    }
}
