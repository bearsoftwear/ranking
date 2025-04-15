<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sekolah extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'npsn',
        'nama_sekolah',
        'kecamatan_id',
        'jenjang_sekolah_id',
        'status_sekolah_id',
        'bentuk_pendidikan',
        'nama_kepala_sekolah',
        'nip_kepala_sekolah',
    ];

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function jenjangSekolah(): BelongsTo
    {
        return $this->belongsTo(JenjangSekolah::class);
    }

    public function statusSekolah(): BelongsTo
    {
        return $this->belongsTo(StatusSekolah::class);
    }
}
