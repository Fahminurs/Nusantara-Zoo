<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengunjung extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'Nama_Pengunjung', 'No_Tiket',
    ];

    protected $primaryKey = 'id_pengunjung';

    protected $table = 'pengunjung'; // Menyatakan nama tabel yang sesuai dengan struktur database






}

