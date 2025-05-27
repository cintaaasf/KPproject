<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
@extends('layout')

@section('title', 'Login')

@section('content')
<div class="bg-white p-8 rounded shadow-md w-96">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/login" class="space-y-4">
        @csrf
        <input type="email" name="email" placeholder="Email" required class="w-full p-2 border rounded">
        <input type="password" name="password" placeholder="Password" required class="w-full p-2 border rounded">
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
            Login
        </button>
    </form>

    <p class="text-center mt-4 text-sm">
        Belum punya akun? <a href="/register" class="text-blue-600 hover:underline">Daftar</a>
    </p>
</div>
@endsection
<body>
   