<?php

namespace Database\Factories;

use App\Models\School;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StudentFactory extends Factory{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'nisn' => $this->faker->word(),//
'nama_lengkap' => $this->faker->word(),
'jenis_kelamin' => $this->faker->word(),
'created_at' => Carbon::now(),
'updated_at' => Carbon::now(),

'school_id' => School::factory(),
        ];
    }
}
