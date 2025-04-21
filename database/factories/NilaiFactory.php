<?php

namespace Database\Factories;

use App\Models\MasaKurikulum;
use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NilaiFactory extends Factory
{
    protected $model = Nilai::class;

    public function definition(): array
    {
        return [
            'nilai' => $this->faker->randomFloat(0, 0, 100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'siswa_id' => Siswa::inRandomOrder()->first()->id,
            'mata_pelajaran_id' => MataPelajaran::inRandomOrder()->first()->id,
            'masa_kurikulum_id' => MasaKurikulum::inRandomOrder()->first()->id,
        ];
    }
}
