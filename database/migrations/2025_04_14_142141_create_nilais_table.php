<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswas');
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajarans');
            $table->foreignId('masa_kurikulum_id')->constrained('masa_kurikulums');
            $table->float('nilai');
            $table->timestamps();
            $table->softDeletes();

            $table->index('siswa_id');
            $table->index('mata_pelajaran_id');
            $table->index('masa_kurikulum_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
