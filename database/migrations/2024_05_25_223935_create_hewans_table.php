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
        Schema::create('hewan', function (Blueprint $table) {
            $table->increments('id_hewan');
            $table->unique('id_hewan');
            $table->string('Nama Hewan', 50);
            $table->text('Foto')->nullable();
            $table->date('Tanggal Lahir');
            $table->string('Umur', 10);
            $table->string('Jenis Kelamin');
            $table->string('Jenis Pakan', 50);
            $table->string('Berat', 100);
            $table->string('Klasifikasi', 30);
            $table->string('Asal', 50);
            $table->string('Habitat', 50);
            $table->string('Jenis hewan', 50);
            $table->string('Lokasi Kandang', 50);
            $table->string('Status Kesehatan', 50);
            $table->string('Status Konservasi', 50);
            $table->text('Deskripsi Hewan');
            $table->string('Nama Pendata', 50);
            $table->dateTime('Tanggal Data Masuk');
        });
    }
  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewan');
    }
};

