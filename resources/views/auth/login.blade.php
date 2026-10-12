```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengurus | SIMPELNU</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: Arial, sans-serif;
            background: #f3f7f4;
            color: #183b2b;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 35px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px #00000012;
        }

        .brand {
            text-align: center;
            margin-bottom: 28px;
        }

        .brand h1 {
            margin: 0;
            color: #087443;
            font-size: 30px;
        }

        .brand p {
            margin-top: 8px;
            color: #65766b;
            line-height: 1.5;
            font-size: 14px;
        }

        label {
            display: block;
            margin: 18px 0 8px;
            font-weight: bold;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d6e1d9;
            border-radius: 8px;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #087443;
            border-color: transparent;
        }

        button {
            width: 100%;
            margin-top: 24px;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #087443;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover { background: #065b35; }

        .back {
            display: block;
            margin-top: 22px;
            text-align: center;
            color: #087443;
            text-decoration: none;
            font-size: 14px;
        }

        .error {
            padding: 12px;
            border-radius: 8px;
            background: #fff0f0;
            color: #a52222;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="brand">
            <h1>SIMPELNU</h1>
            <p>Portal Administrasi IPNU–IPPNU<br>
            Kecamatan Madiun</p>
        </div>

        <h2>Login Pengurus</h2>
        <p>Silakan masuk menggunakan akun pengurus.</p>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

      <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <label for="email">Email Pengurus</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Masukkan email"
                autocomplete="username"
                required
            >

            <label for="password">Kata Sandi</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukkan kata sandi"
                autocomplete="current-password"
                required
            >

            <button type="submit">Masuk</button>
        </form>

        <a class="back" href="/">← Kembali ke Beranda</a>
    </div>
</body>
</html>
```