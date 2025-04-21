<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\SoftDeletes;
    
    class School extends Model {
        use HasFactory, SoftDeletes;
        
        protected $fillable = [
        'npsn',
        'nama_sekolah',
        'kecamatan_id',
        ];
        
        public function kecamatan(): BelongsTo
        {
        return $this->belongsTo(Kecamatan::class);
        }
    }
