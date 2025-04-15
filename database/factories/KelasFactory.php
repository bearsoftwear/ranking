<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class KelasFactory extends Factory
{
    protected $model = Kelas::class;

    public function definition(): array
    {
        return [
            'tingkat_kelas' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
