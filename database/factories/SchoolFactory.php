<?php

namespace Database\Factories;

use App\Models\Kecamatan;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SchoolFactory extends Factory{
    protected $model = School::class;

    public function definition(): array
    {
        return [
            'npsn' => $this->faker->word(),//
'nama_sekolah' => $this->faker->word(),
'created_at' => Carbon::now(),
'updated_at' => Carbon::now(),

'kecamatan_id' => Kecamatan::factory(),
        ];
    }
}
