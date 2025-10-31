<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | Tambah Data Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
        <form method="post" action="@if(isset($matakuliah))
            {{ route('mata_kuliah.update', ['id' => $matakuliah['id']]) }}
        @else
            {{ route('mata_kuliah.store') }}
        @endif">
            @csrf
            @if(isset($matakuliah))
                <input type="hidden" name="_method" value="put" />
            @endif  
            <table border="1" bgcolor="black">
                <tr>
                    <td colspan=6 align="center"><h1><font color="white">
                    @if(isset($matakuliah))
                        Update Mata Kuliah
                    @else
                        Create Mata Kuliah
                    @endif</font></h1></td>
                </tr>
                <tr>
                    <td><font color="white">Kode MK</font></td>
                    <td colspan=5><input type="text" name="kode" size="55" value="{{ $matakuliah['kode'] ?? ''}}"></td>
                </tr>
                <tr>
                    <td><font color="white">Nama MK</font></td>
                    <td colspan=5><input type="text" name="nama_matakuliah" size="55" value="{{ $matakuliah['nama_matakuliah'] ?? ''}}"></td>
                </tr>
                <tr>
                    <td><font color="white">Angkatan</font></td>
                    <td colspan=5><input type="text" name="angkatan" size="55" value="{{ $matakuliah['angkatan'] ?? ''}}"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="{{ isset($matakuliah) ? 'Update' : 'Create' }}"></td>
                    <td colspan="3" align="center"><input type="reset" value="Batal" onclick="window.history.back()"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>