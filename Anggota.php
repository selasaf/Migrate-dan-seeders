<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    public $timestamps = true; // Menandakan bahwa model ini menggunakan timestamp
    protected $table = "anggota"; // Nama tabel yang digunakan
    // Jika kamu ingin menggunakan $fillable, bisa diaktifkan seperti ini:
    // protected $fillable = ['nama', 'hp'];

    protected $guarded = ['id']; // Melindungi kolom 'id' agar tidak bisa diisi secara massal
}
