<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Tampilan Publik (Bisa diakses siapa saja / Siswa)
    public function publicIndex()
    {
        $siswas = Siswa::latest()->get();
        return view('siswa.public', compact('siswas'));
    }

    // Tampilan Khusus Admin (Hanya setelah Login)
    public function index()
    {
        $siswas = Siswa::latest()->get();
        return view('siswa.index', compact('siswas'));
    }

    // Tambah Siswa (Khusus Admin)
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:siswas,nisn',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }

    // Hapus Siswa (Khusus Admin)
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->back()->with('success', 'Data siswa berhasil dihapus!');
    }
}