<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota'; // Pastikan nama tabel sesuai dengan tabel di database.

    protected $fillable = [
        'Nama_Anggota',
        'Alamat',
        'Jurusan',
        'IDDaftar',
    ];
}
