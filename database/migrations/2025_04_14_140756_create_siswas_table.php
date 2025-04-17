<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->string('nama_ibu_kandung');
            $table->foreignId('sekolah_id')->constrained('sekolahs');
            $table->integer('kelas');
            $table->timestamps();
            $table->softDeletes();

            $table->index('sekolah_id');
            $table->index('kelas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
