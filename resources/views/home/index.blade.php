@extends('layouts.main')

@section('container')
    <div class="bg-white border shadow-md w-full h-max mt-4 rounded-3xl overflow-hidden">
        <div class="bg-green-500 w-full h-4"></div>
        <div class="flex flex-col w-full">
            <form action="" method="get" class="p-3">
                @method('get')
                @csrf
                <div class="flex flex-row">
                    <input type="text" id="findProduct" name="findProduct" placeholder="Masukkan nama barang" class="w-full border rounded-l-lg shadow-sm pl-4">
                    <button type="submit" class="bg-green-500 text-white px-2 py-1 rounded-r-lg"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <ul class="flex flex-wrap justify-center gap-3 py-3">
                <li>
                    <a href="/food" class="flex flex-col items-center text-center text-sm">
                        <img src="{{ asset('assets/home/food.png') }}" alt="food-category" class="w-10">
                        <p class="capitalize">food</p>
                    </a>
                </li>
                <li>
                    <a href="/food" class="flex flex-col items-center text-center text-sm">
                        <img src="{{ asset('assets/home/electronic.png') }}" alt="electronic-category" class="w-10">
                        <p class="capitalize">electronic</p>
                    </a>
                </li>
                <li>
                    <a href="/food" class="flex flex-col items-center text-center text-sm">
                        <img src="{{ asset('assets/home/furniture.png') }}" alt="furniture-category" class="w-10">
                        <p class="capitalize">furniture</p>
                    </a>
                </li>
                <li>
                    <a href="/food" class="flex flex-col items-center text-center text-sm">
                        <img src="{{ asset('assets/home/game.png') }}" alt="game-category" class="w-10">
                        <p class="capitalize">game</p>
                    </a>
                </li>
                <li>
                    <a href="/food" class="flex flex-col items-center text-center text-sm">
                        <img src="{{ asset('assets/home/outfit.png') }}" alt="outfit-category" class="w-10">
                        <p class="capitalize">outfit</p>
                    </a>
                </li>
                <li>
                    <a href="/food" class="flex flex-col items-center text-center text-sm">
                        <img src="{{ asset('assets/home/software.png') }}" alt="software-category" class="w-10">
                        <p class="capitalize">software</p>
                    </a>
                </li>
                <li>
                    <a href="/food" class="flex flex-col items-center text-center text-sm">
                        <img src="{{ asset('assets/home/other.png') }}" alt="other-category" class="w-10">
                        <p class="capitalize">other</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bg-green-500 w-full h-4"></div>
    </div>
@endsection