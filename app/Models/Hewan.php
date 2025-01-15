<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama Hewan', 'Foto', 'Tanggal Lahir', 'Umur', 'Jenis Kelamin', 'Jenis Pakan', 'Berat', 'Klasifikasi', 'Asal', 'Habitat', 'Jenis hewan', 'Lokasi Kandang', 'Status Kesehatan', 'Status Konservasi', 'Deskripsi Hewan', 'Nama Pendata', 'Tanggal Data Masuk'
    
    ];
    protected $table = 'hewan';

    protected $primaryKey = 'id_hewan';
    public $timestamps = false;

    protected static function booted()
    {
        static::creating(function ($hewan) {
            $hewan->{'Tanggal Data Masuk'} = now();
        });
    }
}
