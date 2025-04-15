<?php

namespace Database\Factories;

use App\Models\StatusSekolah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StatusSekolahFactory extends Factory
{
    protected $model = StatusSekolah::class;

    public function definition(): array
    {
        return [
            'nama_status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
