<?php

namespace Database\Factories;

use App\Models\BentukPendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BentukPendidikanFactory extends Factory
{
    protected $model = BentukPendidikan::class;

    public function definition(): array
    {
        return [
            'nama_bentuk_pendidikan' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
