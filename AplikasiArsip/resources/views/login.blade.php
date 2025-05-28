<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Arsip Surat</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, rgba(92, 64, 51, 0.6), rgba(210, 180, 140, 0.6)),
                url('images\Logo Dinas.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background: #fff8f0;
            padding: 40px 30px;
            border-radius: 15px;
            width: 360px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #4B2E2E;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
            color: #5C4033;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccb79e;
            border-radius: 8px;
            font-size: 14px;
            background-color: #fefefe;
        }
        .form-group input:focus {
            border-color: #a67b5b;
            outline: none;
        }
        .btn {
            background: #8B4513;
            color: #fff;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #A0522D;
        }
        .text-center {
            text-align: center;
            margin-top: 20px;
            color: #5C4033;
        }
        .text-center a {
            color: #8B4513;
            text-decoration: none;
            font-weight: 600;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
        .error {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
            text-align: center;
        }
        .logo-header {
            padding: 20px 0 10px;
            text-align: center;
        }
        .logo-header img {
            max-height: 110px
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Arsip Surat</h2>
        <div class="logo-header">
            <img src="{{ ('images\Logo Dinas.png') }}" alt="Logo Dinas">
        </div>

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" required placeholder="Masukkan password">
            </div>
            <button type="submit" class="btn">Login</button>
        </form>

        <div class="text-center">
            Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a>
        </div>
    </div>
</body>
</html>
