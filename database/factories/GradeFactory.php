<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class GradeFactory extends Factory{
    protected $model = Grade::class;

    public function definition(): array
    {
        return [
            'nilai' => $this->faker->randomFloat(),//
'created_at' => Carbon::now(),
'updated_at' => Carbon::now(),

'student_id' => Student::factory(),
'subject_id' => Subject::factory(),
        ];
    }
}
