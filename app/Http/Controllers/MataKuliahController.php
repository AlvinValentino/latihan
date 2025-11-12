<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index() {
        $dataMataKuliah = Matakuliah::get();
        return view('mata_kuliah.indexMataKuliah', ['matakuliahs' => $dataMataKuliah]);
    }

    public function create() {
        return view('mata_kuliah.createMataKuliah');
    }

    public function store(Request $request) {
        $data = Matakuliah::create([
            'kode' => $request->kode,
            'nama_matakuliah' => $request->nama_matakuliah,
            'angkatan' => $request->angkatan,
            'jurusan' => $request->jurusan,
        ]);

        if($data) {
            return redirect()->route('mata_kuliah.index');
        } else {
            return redirect()->route('mata_kuliah.create');
        }
    }

    public function edit(string $id) {
        $dataMataKuliah = Matakuliah::findOrFail($id);
        return view('mata_kuliah.createMataKuliah', ['matakuliah' => $dataMataKuliah]);
    }

    public function update(Request $request, string $id) {
        $data = Matakuliah::findOrFail($id)->update([
            'kode' => $request->kode,
            'nama_matakuliah' => $request->nama_matakuliah,
            'angkatan' => $request->angkatan,
            'jurusan' => $request->jurusan,
        ]);

        if($data) {
            return redirect()->route('mata_kuliah.index');
        } else {
            return redirect()->route('mata_kuliah.edit', $id);
        }
    }

    public function destroy(string $id) {
        MataKuliah::findOrFail($id)->delete();

        return redirect()->route('mata_kuliah.index');
    }
}
