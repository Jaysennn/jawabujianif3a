<?php

namespace App\Http\Controllers;

use App\Models\Anggota; // Pastikan model diimport
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nama_Anggota' => 'required|string|max:255',
            'Alamat' => 'required|string',
            'Jurusan' => 'required|string|max:100',
            'IDDaftar' => 'required|string|unique:anggota,IDDaftar',
        ]);

        Anggota::create($validated);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil didaftarkan!');
    }
}
