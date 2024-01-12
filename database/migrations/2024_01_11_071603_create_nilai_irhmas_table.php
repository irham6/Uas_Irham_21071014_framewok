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
        Schema::create('nilai_irhams', function (Blueprint $table) {
            $table->id();
            $table->string('id_guru');
            $table->string('nilai_pelajaran');
            $table->string('nilai_uas');
            $table->string('nilai_uts');
            $table->string('id_jadwal');
            $table->string('id_siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_mahadikas');
    }
};
