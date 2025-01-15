<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->increments('id_acara');
            $table->unique('id_acara');
            $table->string('Nama Acara', 50);
            $table->Lokasi('Nama Acara', 50);
            $table->dateTime('Waktu Mulai');
            $table->dateTime('Waktu Berakhir');
            $table->text('Deskripsi Acara');
            $table->string('Nama Pendata', 50);
            $table->dateTime('Tanggal Data Masuk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acara');
    }
};


// CREATE TABLE acara (
//     id_acara INT AUTO_INCREMENT PRIMARY KEY,
//     Nama_Acara VARCHAR(50) NOT NULL,
//     Lokasi VARCHAR(50) NOT NULL,
//     Waktu_Mulai DATETIME NOT NULL,
//     Waktu_Berakhir DATETIME NULL,
//     Deskripsi_Acara TEXT NOT NULL,
//     Nama_Pendata VARCHAR(50) NOT NULL,
//     Tanggal_Data_Masuk DATETIME NOT NULL
// );

