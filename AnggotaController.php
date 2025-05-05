<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    // Fungsi untuk menampilkan semua data anggota
    public function index()
    {
        // Mengambil semua data anggota dari database, diurutkan berdasarkan ID terbaru
        $anggota = Anggota::orderBy('id', 'desc')->get();

        // Mengirim data ke view v_anggota.index
        return view('v_anggota.index', [
            'judul' => 'Data Anggota',
            'index' => $anggota
        ]);
    }

    // Fungsi untuk menampilkan form tambah anggota
    public function create()
    {
        return view('v_anggota.create', [
            'judul' => 'Tambah Anggota'
        ]);
    }

    // Fungsi untuk menyimpan data anggota
    public function store(Request $request)
    {
        // Validasi input data
        $validatedData = $request->validate([ 
            'nama' => 'required|max:255',      // Nama wajib diisi, maksimal 255 karakter
            'hp' => 'required|min:10|max:13',  // HP wajib diisi, minimal 10 karakter, maksimal 13
        ]);

        // Jika data valid, simpan ke database
        Anggota::create($validatedData); 

        // Redirect ke halaman daftar anggota setelah berhasil
        return redirect('/anggota'); 
    }
}


