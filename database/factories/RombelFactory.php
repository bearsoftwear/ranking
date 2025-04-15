<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\Rombel;
use App\Models\Sekolah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RombelFactory extends Factory
{
    protected $model = Rombel::class;

    public function definition(): array
    {
        return [
            'nama_rombel' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'sekolah_id' => Sekolah::factory(),
            'kelas_id' => Kelas::factory(),
        ];
    }
}
