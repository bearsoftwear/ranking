<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
$table->foreignId('user_id')->constrained('users');
$table->foreignId('kecamatan_id')->constrained('kecamatans');
$table->foreignId('subject_id')->constrained('subjects');
$table->timestamps();
$table->softDeletes();//
        });
    }
};
