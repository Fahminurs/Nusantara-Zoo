<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acara'; // Menyatakan nama tabel yang sesuai dengan struktur database

    protected $primaryKey = 'id_acara'; // Menyatakan nama primary key

    public $timestamps = false; // Menyatakan bahwa model ini tidak memiliki kolom timestamp created_at dan updated_at

    protected $fillable = [ // Menyatakan kolom yang bisa diisi secara massal
        'Nama_Acara',
        'Foto',
        'Lokasi',
        'Waktu_Mulai',
        'Waktu_Berakhir',
        'Deskripsi_Acara',
        'Nama_Pendata',
        'Tanggal_Data_Masuk',
    ];

    protected static function booted()
    {
        // Dapat digunakan untuk event model lainnya
    }
}
