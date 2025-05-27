<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
@extends('layout')

@section('title', 'Register')

@section('content')
<div class="bg-white p-8 rounded shadow-md w-96">
    <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/register" class="space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Nama" required class="w-full p-2 border rounded">
        <input type="email" name="email" placeholder="Email" required class="w-full p-2 border rounded">
        <input type="password" name="password" placeholder="Password" required class="w-full p-2 border rounded">
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required class="w-full p-2 border rounded">
        <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">
            Register
        </button>
    </form>

    <p class="text-center mt-4 text-sm">
        Sudah punya akun? <a href="/login" class="text-blue-600 hover:underline">Login</a>
    </p>
</div>
@endsection
<body>
    