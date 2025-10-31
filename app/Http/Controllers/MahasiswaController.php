<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.indexMahasiswa', ['mahasiswas' => Mahasiswa::all()]);
    }

    public function create()
    {
        return view('mahasiswa.createMahasiswa');
    }

    public function store(Request $request)
    {
        $data = Mahasiswa::create([
            'name' => $request->name,
            'NIM' => $request->NIM,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan
        ]);

        if($data) {
            return redirect()->route('mahasiswa.index');
        } else {
            return redirect()->route('mahasiswa.create');
        }
    }

    public function edit(string $id) {
        $dataMahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.createMahasiswa', ['mahasiswa' => $dataMahasiswa]);
    }

    public function update(Request $request, string $id) {
        $data = Mahasiswa::findOrFail($id)->update([
            'name' => $request->name,
            'NIM' => $request->NIM,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan
        ]);

        if($data) {
            return redirect()->route('mahasiswa.index');
        } else {
            return redirect()->route('mahasiswa.edit', $id);
        }
    }

    public function destroy(string $id) {
        Mahasiswa::findOrFail($id)->delete();

        return redirect()->route('mahasiswa.index');
    }
}
