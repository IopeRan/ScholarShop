@extends('layouts.main')

@section('container')
    <div class="bg-white w-full h-44 rounded-3xl border overflow-hidden shadow-sm mt-4">
        <div class="flex flex-row">
            <div class="bg-green-500 w-4 h-44"></div>
            <div class="p-4">
                <h5 class="text-xl font-medium font-mono">Account Setting</h5>
                <div class="ml-4">
                    <p><a class="text-sky-500 hover:text-sky-400 hover:duration-150" href="/account/add/email">add email</a></p>
                    <p><a class="text-sky-500 hover:text-sky-400 hover:duration-150" href="/account/add/whatsapp">add whatsapp</a></p>
                    <p><a class="text-sky-500 hover:text-sky-400 hover:duration-150" href="/account/add/email">change password</a></p>
                    <a href="/" class="text-sky-500 hover:text-sky-400 hover:duration-150">back home</a>
                </div>
            </div>
        </div>
    </div>
@endsection