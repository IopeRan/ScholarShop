@extends('layouts.main')

@section('container')
    <div class="bg-white w-full h-max rounded-3xl border shadow-sm mt-4 overflow-hidden">
        <div class="bg-green-500 w-full h-4"></div>
        <div class="w-full flex flex-col gap-3 items-center justify-center mt-4">
            <div>
                <img src="{{ asset($user->image) }}" alt="{{ $user->username }}" class="rounded-full w-32 h-32 border-4 border-green-500">
            </div>
        </div>
        <hr class="mt-4">
        <form action="" method="post" class="flex flex-col gap-3 px-6 pb-4" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="flex flex-col">
                <label for="fullname" class="text-slate-600 font-medium">Fullname</label>
                <input type="text" id="fullname" name="fullname" value="{{ $user->fullname }}" class="border px-3 py-1 rounded-lg shadow-sm outline-green-500">
            </div>
            <div class="flex flex-col">
                <label for="username" class="text-slate-600 font-medium">Username</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}" class="border px-3 py-1 rounded-lg shadow-sm outline-green-500">
            </div>
            <div class="flex flex-col">
                <label for="image" class="text-slate-600 font-medium">Image</label>
                <input type="hidden" id="oldImage" name="oldImage" value="{{ $user->image }}">
                <input type="file" id="image" name="image" class="border px-3 py-1 rounded-lg shadow-sm outline-green-500">
            </div>
            <hr>
            <div class="flex justify-between">
                <a href="/" class="bg-yellow-500 px-6 py-2 text-white font-medium rounded-lg hover:bg-yellow-400 hover:duration-150">Back</a>
                <button class="bg-green-500 px-6 py-2 text-white font-medium rounded-lg hover:bg-green-400 hover:duration-150">Save</button>
            </div>
        </form>
        <hr class="mt-4">
        <p class="text-sm text-center mt-4">do you want to edit account setting? <a href="/account" class="text-sky-500 hover:text-sky-400 hover:duration-150">go</a></p>
        <div class="bg-green-500 w-full h-4 mt-4"></div>
    </div>
@endsection