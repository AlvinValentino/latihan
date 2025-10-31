<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
        <form method="post" action="@if(isset($mahasiswa))
            {{ route('mahasiswa.update', ['id' => $mahasiswa['id']]) }}
        @else
            {{ route('mahasiswa.store') }}
        @endif">
            @csrf
            @if(isset($mahasiswa))
                <input type="hidden" name="_method" value="put" />
            @endif  
            <table border="1" bgcolor="black">
                <tr>
                    <td colspan=6 align="center"><h1><font color="white">
                    @if(isset($mahasiswa))
                        Update Mahasiswa
                    @else
                        Create Mahasiswa
                    @endif</font></h1></td>
                </tr>
                <tr>
                    <td><font color="white">NIM</font></td>
                    <td colspan=5><input type="text" name="NIM" size="55" value="{{ $mahasiswa['NIM'] ?? ''}}"></td>
                </tr>
                <tr>
                    <td><font color="white">Nama Mahasiswa</font></td>
                    <td colspan=5><input type="text" name="name" size="55" value="{{ $mahasiswa['name'] ?? ''}}"></td>
                </tr>
                <tr>
                    <td><font color="white">Jurusan</font></td>
                    <td colspan=5>
                        <input type="radio" name="jurusan" value="Bisnis Digital"
                        @if (($mahasiswa['jurusan'] ?? 'Bisnis Digital') == "Bisnis Digital")
                        checked
                        @endif><font color="white">Bisnis Digital</font><br>
                        <input type="radio" name="jurusan" value="Kewirausahaan"
                        @if (($mahasiswa['jurusan'] ?? 'Bisnis Digital') == "Kewirausahaan")
                        checked
                        @endif><font color="white">Kewirausahaan</font><br>
                        <input type="radio" name="jurusan" value="Sistem dan Teknologi Informasi"
                        @if (($mahasiswa['jurusan'] ?? 'Bisnis Digital') == "Sistem dan Teknologi Informasi")
                        checked
                        @endif><font color="white">Sistem dan Teknologi Informasi</font><br>
                    </td>
                </tr>
                <tr>
                    <td><font color="white">Angkatan</font></td>
                    <td colspan=5><input type="text" name="angkatan" size="55" value="{{ $mahasiswa['angkatan'] ?? ''}}"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="{{ isset($mahasiswa) ? 'Update' : 'Create' }}"></td>
                    <td colspan="3" align="center"><input type="reset" value="Batal" onclick="window.history.back()"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>