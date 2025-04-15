<?php

namespace Database\Factories;

use App\Models\MataPelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MataPelajaranFactory extends Factory
{
    protected $model = MataPelajaran::class;

    public function definition(): array
    {
        return [
            'nama_mapel' => $this->faker->word(),
            'bobot' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
