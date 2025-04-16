<?php

namespace Database\Factories;

use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition(): array
    {
        return [
            'nisn' => $this->faker->unique()->numerify('##########'),
            'nik' => $this->faker->unique()->numerify('################'),
            'nama' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'tanggal_lahir' => $this->faker->date,
            'nama_ibu_kandung' => $this->faker->name('female'),
            'kelas' => $this->faker->numberBetween(1, 6),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'sekolah_id' => Sekolah::inRandomOrder()->first()->id,
        ];
    }
}
