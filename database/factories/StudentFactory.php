<?php

namespace Database\Factories;

use App\Models\School;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'nisn' => $this->faker->numerify('##########'),
            'nama_lengkap' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'school_id' => School::inRandomOrder()->first()->id,
        ];
    }
}
