<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | Absensi</title>
</head>
<body>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Mahasiswa</th>
                        <th>Kehadiran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $mahasiswa->NIM }}</td>
                            <td>{{ $mahasiswa->name }}</td>
                            <td>{{ $mahasiswa->jurusan }}</td>
                            <td>{{ $mahasiswa->angkatan }}</td>
                            <td class="d-flex gap-3">
                                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data mahasiswa</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>