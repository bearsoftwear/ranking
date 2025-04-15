<?php

namespace Database\Factories;

use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class KecamatanFactory extends Factory
{
    protected $model = Kecamatan::class;

    public function definition(): array
    {
        return [
            'nama_kecamatan' => $this->faker->city(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
