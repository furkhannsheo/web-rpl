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
        Schema::create('konfigurasis', function (Blueprint $table) {
            $table->id();
            $table->string('banner_web')->nullable();
            $table->string('gambar_sekolah')->nullable();
            $table->text('kata_sambutan')->nullable();
            $table->string('nama_kepala_sekolah')->nullable();
            $table->string('foto_kepala_sekolah')->nullable();
            $table->string('headline_ppdb')->nullable();
            $table->text('teks_ppdb')->nullable();
            $table->string('gambar_ppdb')->nullable();
            $table->string('statistik_satu_judul')->nullable();
            $table->string('statistik_satu_deskripsi')->nullable();
            $table->string('statistik_dua_judul')->nullable();
            $table->string('statistik_dua_deskripsi')->nullable();
            $table->string('statistik_tiga_judul')->nullable();
            $table->string('statistik_tiga_deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfigurasis');
    }
};
