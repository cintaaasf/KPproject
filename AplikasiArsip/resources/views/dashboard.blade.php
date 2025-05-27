<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white p-8 rounded shadow-md text-center w-96">
    <h2 class="text-2xl font-bold mb-4">Selamat Datang</h2>
    <p class="mb-6">Halo, <strong>{{ Auth::user()->name }}</strong>! Kamu berhasil login.</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Logout
        </button>
    </form>
</div>
@endsection
</html>
