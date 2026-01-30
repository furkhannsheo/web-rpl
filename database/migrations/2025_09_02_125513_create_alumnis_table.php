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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->year('angkatan');
            $table->string('gambar');
            $table->string('aktivitas_sekarang');
            $table->unsignedTinyInteger('bintang')->default(0);
            $table->string('testimoni', 255);
            $table->boolean('ditampilkan')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
