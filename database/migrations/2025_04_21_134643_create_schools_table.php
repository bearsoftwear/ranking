<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('npsn')->unique();
            $table->string('nama_sekolah');
            $table->foreignId('kecamatan_id')->constrained('kecamatans');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
