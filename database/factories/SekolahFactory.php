<?php

namespace Database\Factories;

use App\Models\JenjangSekolah;
use App\Models\Kecamatan;
use App\Models\Sekolah;
use App\Models\StatusSekolah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SekolahFactory extends Factory
{
    protected $model = Sekolah::class;

    public function definition(): array
    {
        return [
            'npsn' => $this->faker->unique()->numerify('########'),
            'nama_sekolah' => $this->faker->word(),
            'bentuk_pendidikan' => "SD",
            'nama_kepala_sekolah' => $this->faker->name(),
            'nip_kepala_sekolah' => $this->faker->unique()->numerify('##################'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'kecamatan_id' => \App\Models\Kecamatan::inRandomOrder()->first()->id,
            'jenjang_sekolah_id' => \App\Models\JenjangSekolah::inRandomOrder()->first()->id,
            'status_sekolah_id' => \App\Models\StatusSekolah::inRandomOrder()->first()->id,
        ];
    }
}
