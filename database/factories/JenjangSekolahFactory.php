<?php

namespace Database\Factories;

use App\Models\JenjangSekolah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class JenjangSekolahFactory extends Factory
{
    protected $model = JenjangSekolah::class;

    public function definition(): array
    {
        return [
            'nama_jenjang' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
