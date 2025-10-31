<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index() {
        return view('absensi.index');
    }

    public function pilihMataKuliah(int $angkatan) {
        $dataMataKuliah = Matakuliah::where('angkatan', $angkatan)->get();
        return view('absensi.pilihMataKuliah', ['matakuliahs' => $dataMataKuliah]);
    }

    public function absensi(int $angkatan, string $kode_mk) {

    }
}
