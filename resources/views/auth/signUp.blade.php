@extends('layouts.auth')

@section('container')
    <img src="{{ asset('assets/auth/shop.png') }}" alt="shop" class="w-14">
    <div class="bg-white w-full lg:w-1/3 h-max rounded-lg overflow-hidden shadow-sm">
        <div class="bg-green-500 w-full min-h-4"></div>
        <div>
            <h5 class="font-mono text-center py-4 text-2xl font-medium border-b text-green-500">ScholarShop</h5>
        </div>
        @if(session('error'))
            <p class="text-red-500 text-center">{{ session('error') }}</p>
        @endif
        <form action="" method="post" class="flex flex-col w-full p-4 gap-3 border-b">
            @method('post')
            @csrf
            <div class="flex flex-col">
                <label for="fullname" class="text-slate-500">Fullname</label>
                <input type="text" id="fullname" name="fullname" placeholder="Type Your Fullname...." class="w-full border rounded-lg shadow-sm outline-green-500 px-3 py-2">
            </div>
            <div class="flex flex-col">
                <label for="username" class="text-slate-500">Username</label>
                <input type="text" id="username" name="username" placeholder="Type Your Username...." class="w-full border rounded-lg shadow-sm outline-green-500 px-3 py-2">
            </div>
            <div class="flex flex-col">
                <label for="password" class="text-slate-500">Password</label>
                <input type="password" id="password" name="password" placeholder="Type Your Password...." class="w-full border rounded-lg shadow-sm outline-green-500 px-3 py-2">
            </div>
            <div class="flex justify-end mt-4">
                <button type="submit" class="bg-green-500 text-white font-medium px-3 py-2 rounded-lg hover:bg-green-400 hover:duration-150">Sign Up</button>
            </div>
        </form>
        <div>
            <p class="font-light my-3 text-center text-sm">have an account? <a href="/signin" class="text-sky-500 hover:text-sky-400 hover:duration-150">sign in</a></p>
        </div>
        <div class="flex justify-end items-end">
            <div class="bg-green-500 w-full h-4"></div>
        </div>
    </div>
@endsection