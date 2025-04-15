<?php

namespace Database\Factories;

use App\Models\MasaKurikulum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MasaKurikulumFactory extends Factory
{
    protected $model = MasaKurikulum::class;

    public function definition(): array
    {
        return [
            'periode' => $this->faker->word(),
            'status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
