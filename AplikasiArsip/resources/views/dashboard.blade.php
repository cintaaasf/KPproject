<!DOCTYPE html>
<html lang="en">
<body>
   @extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="flex justify-center items-center h-full">
    <div class="bg-white p-8 rounded shadow-md text-center w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-[#5C4033]">Selamat Datang</h2>
        <p class="mb-6 text-gray-700">
            Halo, <strong>{{ Auth::user()->name }}</strong>! Kamu berhasil login.
        </p>
    </div>
</div>
@endsection
</body>
</html>
