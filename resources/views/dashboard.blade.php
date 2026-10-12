<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard SIMPELNU Kecamatan Madiun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f3f6f4;
            color: #24352b;
        }
        header {
            background: #14532d;
            color: white;
            padding: 24px;
        }
        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
        }
        .card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            box-shadow: 0 2px 8px #0000000d;
        }
        .card h3 {
            color: #166534;
        }
        button {
            background: #b91c1c;
            color: white;
            padding: 10px 16px;
            border: 0;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>SIMPELNU</h1>
        <p>Dashboard Admin Kecamatan Madiun</p>
    </header>

    <main>
        <h2>Selamat datang, {{ auth()->user()->name }}!</h2>
        <p>Pusat pengelolaan organisasi IPNU dan IPPNU Kecamatan Madiun.</p>

        <div class="cards">
            <div class="card">
                <h3>Data Anggota</h3>
                <p>Pengelolaan anggota organisasi.</p>
            </div>
            <div class="card">
                <h3>Data Pengurus</h3>
                <p>Pengelolaan struktur kepengurusan.</p>
            </div>
            <div class="card">
                <h3>Administrasi</h3>
                <p>Surat dan dokumen organisasi.</p>
            </div>
            <div class="card">
                <h3>Kegiatan</h3>
                <p>Agenda PAC, Ranting, dan Komisariat.</p>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}" style="margin-top: 25px;">
            @csrf
            <button type="submit">Keluar</button>
        </form>
    </main>
</body>
</html>