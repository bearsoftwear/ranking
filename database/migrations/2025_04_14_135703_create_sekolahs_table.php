<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('npsn')->unique();
            $table->string('nama_sekolah');
            $table->foreignId('kecamatan_id')->constrained('kecamatans');
            $table->foreignId('status_sekolah_id')->constrained('status_sekolahs');
            $table->foreignId('bentuk_pendidikan_id')->constrained('bentuk_pendidikans');
            $table->string('nama_kepala_sekolah')->nullable();
            $table->string('nip_kepala_sekolah')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('kecamatan_id');
            $table->index('status_sekolah_id');
            $table->index('bentuk_pendidikan_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
