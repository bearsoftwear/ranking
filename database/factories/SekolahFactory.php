<?php

namespace Database\Factories;

use App\Models\BentukPendidikan;
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
            'nama_sekolah' => $this->faker->company(),
            'nama_kepala_sekolah' => $this->faker->name(),
            'nip_kepala_sekolah' => $this->faker->unique()->numerify('##################'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'kecamatan_id' => Kecamatan::inRandomOrder()->first()->id,
            'bentuk_pendidikan_id' => BentukPendidikan::inRandomOrder()->first()->id,
            'status_sekolah_id' => StatusSekolah::inRandomOrder()->first()->id,
        ];
    }
}
