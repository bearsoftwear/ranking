<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\SoftDeletes;
    
    class Grade extends Model {
        use HasFactory, SoftDeletes;
        
        protected $fillable = [
        'student_id',
        'subject_id',
        'nilai',
        ];
        
        public function student(): BelongsTo
        {
        return $this->belongsTo(Student::class);
        }
        
        public function subject(): BelongsTo
        {
        return $this->belongsTo(Subject::class);
        }
    }
