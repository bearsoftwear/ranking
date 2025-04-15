<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nilai extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'siswa_id',
        'mata_pelajaran_id',
        'masa_kurikulum_id',
        'nilai',
    ];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class);
    }

    public function masaKurikulum(): BelongsTo
    {
        return $this->belongsTo(MasaKurikulum::class);
    }
}
