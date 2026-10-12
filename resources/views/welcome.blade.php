
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPELNU Kecamatan Madiun</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f7f4;
            color: #183b2b;
        }
        header {
            background: #087443;
            color: white;
            padding: 22px 8%;
        }
        header h1 { margin: 0; font-size: 28px; }
        header p { margin-bottom: 0; }
        main {
            max-width: 950px;
            margin: 55px auto;
            padding: 20px;
            text-align: center;
        }
        .panel {
            background: white;
            padding: 38px 22px;
            border-radius: 16px;
            box-shadow: 0 5px 20px #00000010;
        }
        .label {
            color: #087443;
            font-weight: bold;
            letter-spacing: 2px;
        }
        h2 { font-size: 32px; }
        .description {
            color: #5c6e63;
            line-height: 1.8;
        }
        .buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 28px;
        }
        .button {
            display: inline-block;
            padding: 14px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }
        .ipnu { background: #087443; color: white; }
        .ippnu { background: #f8e6ef; color: #a22261; }
        footer {
            text-align: center;
            padding: 25px;
            color: #65766b;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <header>
        <h1>SIMPELNU</h1>
        <p>Sistem Informasi Pelajar NU Kecamatan Madiun</p>
    </header>

    <main>
        <div class="panel">
            <p class="label">SELAMAT DATANG</p>
            <h2>Portal Data Pelajar NU</h2>
            <p class="description">
                Sistem informasi untuk membantu pengelolaan data anggota,
                administrasi, dan organisasi IPNU–IPPNU di wilayah
                Kecamatan Madiun.
            </p>

            <div class="buttons">
                <a class="button ipnu" href="#">Portal IPNU</a>
                <a class="button ippnu" href="#">Portal IPPNU</a>
            </div>
        </div>
    </main>

    <footer>
        © SIMPELNU Kecamatan Madiun
        <br>Ikatan Pelajar Nahdlatul Ulama – Ikatan Pelajar Putri Nahdlatul Ulama
    </footer>
</body>
</html>
