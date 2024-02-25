@extends('layouts.main')

@section('container')
    <div class="bg-white border shadow-md w-full h-max mt-4 rounded-3xl overflow-hidden">
        <div class="bg-green-500 w-full h-4"></div>
        <div class="my-6 flex flex-col text-center justify-center items-center">
            <img src="{{ asset('assets/general/shop.png') }}" alt="shop" class="w-14">
            <p class="text-slate-400 text-sm">kamu tidak punya toko :(</p>
            <a href="/shop/create" class="text-sky-500 hover:text-sky-400 hover:duration-150">buat toko?</a>
        </div>
        <div class="bg-green-500 w-full h-4"></div>
    </div> 

    <div class="bg-white border shadow-md w-full h-max mt-4 rounded-3xl overflow-hidden">
        <div class="flex flex-row">
            <div class="bg-green-500 w-4"></div>
            <div class="ml-4 mt-2">
                <h5 class="font-medium font-mono text-xl">Syarat dan Ketentuan</h5>
                <ol class="list-decimal ml-6 pr-2 text-sm text-slate-600 flex flex-col gap-1 mb-2">
                    <li>Pastikan Email dan nomor WhatsApp sudah ter-verifikasi.</li>
                    <li>Memberikan nama toko yang sopan dan tidak melanggar etika.</li>
                    <li>Pemilik toko harus terkoneksi dengan OSIS.</li>
                    <li>Setiap pemasukan akan di potong 500 Rupiah untuk biaya Admin.</li>
                </ol>
            </div>
        </div>
    </div>
@endsection