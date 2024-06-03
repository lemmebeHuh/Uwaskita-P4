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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->onDelete('cascade');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliahs')->onDelete('cascade');
            $table->foreignId('tahun_akademik_id')->constrained('tahun_akademiks')->onDelete('cascade');
            $table->float('nilai_tugas')->nullable();
            $table->float('nilai_uts')->nullable();
            $table->float('nilai_uas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
