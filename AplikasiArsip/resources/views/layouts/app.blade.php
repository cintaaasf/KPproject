@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-[#8B4513] to-[#D2B48C] p-8 flex justify-center items-start">
    <div class="bg-white p-8 rounded shadow-md text-center w-64">
        <h2 class="text-2xl font-bold mb-4 text-[#5C4033]">Selamat Datang</h2>
        <p class="mb-6 text-gray-700">
            Halo, <strong>{{ Auth::user()->name }}</strong>! Kamu berhasil login.
        </p>
    </div>
</div>
@endsection
