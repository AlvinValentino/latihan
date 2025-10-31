<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="px-5 py-4">
    <div class="d-flex gap-5">
        <button class="btn btn-secondary" onclick="window.history.back()">Kembali</button>
        <h2>Mata Kuliah</h2>
    </div>

    <div class="w-full mt-4 d-flex flex-column gap-4">
        @forelse($matakuliahs as $matakuliah)
        <a href="" class="shadow-sm p-3 text-decoration-none text-black" style="background-color: #F9F9F9;">
            <h4>{{ $matakuliah->nama_matakuliah }}</h4>
            <span>{{ $matakuliah->kode }}</span>
        </a>
        @empty
            <h1 class="mx-auto">Tidak ada data mata kuliah</h1>
        @endforelse
    </div>
</body>
</html>