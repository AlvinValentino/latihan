<?php $i = 1; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | Daftar Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid">
        <a href="{{ route('mata_kuliah.create') }}" class="btn btn-primary my-3 py-2">Tambah Mata Kuliah</a>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary my-3 py-2">Data Mahasiswa</a>
        <a href="{{ route('absensi.index') }}" class="btn btn-secondary my-3 py-2">Absensi</a>

        <div class="table-responsive">
            <table class="table table-striped align-middle">
                
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Angkatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($matakuliahs as $matakuliah)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $matakuliah->kode }}</td>
                            <td>{{ $matakuliah->nama_matakuliah }}</td>
                            <td>{{ $matakuliah->angkatan }}</td>
                            <td class="d-flex gap-3">
                                <a href="{{ route('mata_kuliah.edit', $matakuliah->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mata_kuliah.destroy', $matakuliah->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data mata kuliah</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>