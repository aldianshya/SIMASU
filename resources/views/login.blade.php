<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIMASU</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background: #ffffff;
        }

        .left, .right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 2rem;
        }

        /* LEFT (Form Login) */
        .form-box {
            max-width: 380px;
            width: 100%;
        }

        .form-box h1 {
            font-size: 1.8rem;
            color: #1e40af;
            margin-bottom: 0.3rem;
        }

        .form-box p {
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            color: #555;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 0.95rem;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            margin-bottom: 1.2rem;
        }

        .form-options a {
            color: #1e40af;
            text-decoration: none;
        }

        .form-options input {
            margin-right: 5px;
        }

        button.login-btn {
            width: 100%;
            padding: 0.8rem;
            background: #3b82f6;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.2rem 0;
            color: #777;
            font-size: 0.85rem;
        }

        .divider::before, .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #ddd;
        }

        .divider span {
            margin: 0 10px;
        }

        .social-login {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.2rem;
        }

        .social-login button {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.6rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            background: white;
            cursor: pointer;
            font-size: 0.85rem;
            gap: 8px;
        }

        .form-footer {
            text-align: center;
            font-size: 0.85rem;
        }

        .form-footer a {
            color: #1e40af;
            text-decoration: none;
        }

        /* RIGHT (Background + Logo) */
        .right {
            background: url('{{ asset('bg-disdik.png') }}') center/cover no-repeat;
        }

        .right::before {
            content: "";
            position: absolute;
            inset: 0;
            /* background: rgba(255, 255, 255, 0.85); */
        }

        .right-content {
            position: relative;
            text-align: center;
            max-width: 400px;
        }

        .right-content img {
            max-width: 180px;
            margin-bottom: 1rem;
        }

        .right-content h2 {
            font-size: 2rem;
            color: #1e40af;
            margin-bottom: 0.6rem;
        }

        .right-content p {
            font-size: 1rem;
            color: #333;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            body {
                flex-direction: column;
            }
            .right {
                order: -1;
                padding: 3rem 1rem;
            }
            .right-content img {
                max-width: 140px;
            }
        }
    </style>
</head>
<body>

    <!-- LEFT: Login Form -->
    <div class="left">
        <div class="form-box">
            <h1>Selamat Datang Admin SIMASU!</h1>
            <p>Masukkan Kredensial Anda untuk mengakses akun Anda</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-options">
                    {{-- <label>
                        <input type="checkbox" name="remember"> Remember for 30 days
                    </label> --}}
                    {{-- <a href="{{ route('password.request') }}">Forgot password</a> --}}
                </div>
                <button class="login-btn" type="submit">Login</button>
            </form>

            
        </div>
    </div>

    <!-- RIGHT: Logo + Info -->
    <div class="right">
        <div class="right-content">
            <img src="{{ asset('logo-disdik.png') }}" alt="Logo">
            <h2>SIMASU</h2>
            <p>Sistem manajemen Surat terpadu yang memudahkan pengelolaan surat masuk dan keluar secara digital dan efisien</p>
        </div>
    </div>

</body>
</html>
