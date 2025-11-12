<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-4">
        <form action="{{ route('absensi.submitAbsensi', [$angkatan, $kode_mk]) }}" method="POST">
            @csrf
            <div class="mb-3 d-flex gap-3 align-items-center">
                <label for="tanggal_absensi" class="form-label">Tanggal Kuliah</label>
                <input type="date" name="tanggal_absensi" id="tanggal_absensi" class="form-control w-25" required />
            </div>

            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Mahasiswa</th>
                            <th>Kehadiran</th>
                            <th style="width: 20%;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mahasiswas as $i => $mahasiswa)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>
                                    <b>{{ $mahasiswa->name }}</b><br>
                                    <small class="text-muted">{{ $mahasiswa->NIM }}</small>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <div class="d-flex gap-3">
                                        <label class="{{ $mahasiswa->kehadiran == 'H' ? 'checked' : '' }}">
                                            <input type="radio" name="kehadiran[{{ $mahasiswa->id }}]" value="H" {{ $mahasiswa->kehadiran == 'H' ? 'checked' : '' }}>
                                            H
                                        </label>
                                        <label class="{{ $mahasiswa->kehadiran == 'A' ? 'checked' : '' }}">
                                            <input type="radio" name="kehadiran[{{ $mahasiswa->id }}]" value="A" {{ $mahasiswa->kehadiran == 'A' ? 'checked' : '' }}>
                                            A
                                        </label>
                                        <label class="{{ $mahasiswa->kehadiran == 'I' ? 'checked' : '' }}">
                                            <input type="radio" name="kehadiran[{{ $mahasiswa->id }}]" value="I" {{ $mahasiswa->kehadiran == 'I' ? 'checked' : '' }}>
                                            I
                                        </label>
                                        <label class="{{ $mahasiswa->kehadiran == 'S' ? 'checked' : '' }}">
                                            <input type="radio" name="kehadiran[{{ $mahasiswa->id }}]" value="S" {{ $mahasiswa->kehadiran == 'S' ? 'checked' : '' }}>
                                            S
                                        </label>
                                    </div>
                                    <input type="hidden" name="mahasiswa_id[]" value="{{ $mahasiswa->id }}">
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data mahasiswa</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Submit Absensi</button>
            <a href="{{ route('absensi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script>
        const dateInput = document.getElementById('tanggal_absensi');

        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');

        const formattedDate = `${yyyy}-${mm}-${dd}`;
        dateInput.value = formattedDate;
    </script>
</body>
</html>