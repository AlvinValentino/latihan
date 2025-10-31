<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="px-5 py-4">
    <div>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary my-3 py-2 me-2">Data Mahasiswa</a>
        <a href="{{ route('mata_kuliah.index') }}" class="btn btn-secondary my-3 py-2">Data Mata Kuliah</a>
        <h2>Angkatan</h2>
    </div>

    <div class="w-full mt-4 d-flex flex-column gap-4">
        <a href="{{ route('absensi.pilihMataKuliah', 2022) }}" class="shadow-sm p-3 text-decoration-none text-black" style="background-color: #F9F9F9;">
            <h4>Angkatan 2022</h4>
            <span>Tekan kotak untuk masuk ke detail angkatan 2022</span>
        </a>
        <a href="{{ route('absensi.pilihMataKuliah', 2023) }}" class="shadow-sm p-3 text-decoration-none text-black" style="background-color: #F9F9F9;">
            <h4>Angkatan 2023</h4>
            <span>Tekan kotak untuk masuk ke detail angkatan 2023</span>
        </a>
        <a href="{{ route('absensi.pilihMataKuliah', 2024) }}" class="shadow-sm p-3 text-decoration-none text-black" style="background-color: #F9F9F9;">
            <h4>Angkatan 2024</h4>
            <span>Tekan kotak untuk masuk ke detail angkatan 2024</span>
        </a>
        <a href="{{ route('absensi.pilihMataKuliah', 2025) }}" class="shadow-sm p-3 text-decoration-none text-black" style="background-color: #F9F9F9;">
            <h4>Angkatan 2025</h4>
            <span>Tekan kotak untuk masuk ke detail angkatan 2025</span>
        </a>
    </div>
</body>
</html>