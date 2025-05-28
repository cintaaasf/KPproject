<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Arsip Surat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, rgba(92, 64, 51, 0.6), rgba(210, 180, 140, 0.6)),
                        url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-box {
            background: rgba(255, 255, 255, 0.95);
            padding: 35px;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .register-box h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #5C4033;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .btn {
            background: #8B4513;
            color: #fff;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
        }
        .btn:hover {
            background: #A0522D;
        }
        .text-center {
            text-align: center;
            margin-top: 15px;
        }
        .error {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h2>Register Arsip Surat</h2>

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form action="{{ url('/register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" required placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" required placeholder="Masukkan password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                <input type="password" name="password_confirmation" required placeholder="Ulangi password">
            </div>
            <button type="submit" class="btn">Daftar</button>
        </form>

        <div class="text-center">
            Sudah punya akun? <a href="{{ url('/login') }}">Login</a>
        </div>
    </div>
</body>
</html>
