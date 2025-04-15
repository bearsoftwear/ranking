<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nisn',
        'nik',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'nama_ibu_kandung',
        'sekolah_id',
        'rombel_id',
        'status',
    ];

    public function sekolah(): BelongsTo
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function rombel(): BelongsTo
    {
        return $this->belongsTo(Rombel::class);
    }

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
        ];
    }
}
