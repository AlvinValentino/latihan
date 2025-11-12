<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Absensi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index() {
        return view('absensi.index');
    }

    public function pilihMataKuliah(int $angkatan) {
        $dataMataKuliah = Matakuliah::where('angkatan', $angkatan)->get();
        return view('absensi.pilihMataKuliah', ['matakuliahs' => $dataMataKuliah, 'angkatan' => $angkatan]);
    }

    public function absensi(int $angkatan, string $kode_mk) {
        $searchMatakuliah = Matakuliah::where('kode', $kode_mk)->first();
        $mahasiswas = Mahasiswa::where(['angkatan' => $angkatan, 'jurusan' => $searchMatakuliah->jurusan])->get();
        return view('absensi.absensi', ['angkatan' => $angkatan, 'kode_mk' => $kode_mk, 'mahasiswas' => $mahasiswas]);
    }

    public function submitAbsensi(Request $request, int $angkatan, string $kode_mk) {
        $matakuliahId = MataKuliah::where('kode', $kode_mk)->firstOrFail()->id;
        $mahasiswaIds = $request->input('mahasiswa_id', []);
        $kehadirans = $request->input('kehadiran', []);

        foreach ($mahasiswaIds as $index => $mahasiswaId) {
            $kehadiran = $kehadirans[$index] ?? 'H';

            Absensi::updateOrCreate(
                [
                    'mahasiswa_id' => $mahasiswaId,
                    'matakuliah_id' => $matakuliahId,
                    'tanggal_absensi' => $request->tanggal_absensi,
                ],
                [
                    'status_absen' => $kehadiran,
                    'updated_at' => now(),
                ]
            );

            return redirect()->route('absensi.index');
        }
    }
}
