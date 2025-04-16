<?php

namespace Database\Seeders;

use App\Models\BentukPendidikan;
use App\Models\Kecamatan;
use App\Models\MasaKurikulum;
use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\StatusSekolah;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    protected static ?string $password;

    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => "Bear Softwear",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('45AEL3tHgGJVcM8'),
            'remember_token' => Str::random(10),
        ]);

        $bentukPendidikans = ['PAUD', 'SD', 'SMP', 'SMA', 'SMK'];
        foreach($bentukPendidikans as $bentukPendidikan) {
            BentukPendidikan::factory()->create([
                'nama_bentuk_pendidikan' => $bentukPendidikan,
            ]);
        }

        $kecamatans = ['Panggul', 'Munjungan', 'Pule', 'Dongko', 'Tugu', 'Karangan', 'Kampak', 'Watulimo', 'Bendungan', 'Gandusari', 'Trenggalek', 'Pogalan', 'Durenan', 'Suruh'];
        foreach($kecamatans as $kecamatan) {
            Kecamatan::factory()->create([
                'nama_kecamatan' => $kecamatan,
            ]);
        }

        $masaKurikulum = ['2023 Genap', '2023 Ganjil', '2024 Genap', '2024 Ganjil', '2025 Genap', '2025 Ganjil'];
        foreach($masaKurikulum as $masaKurikulum) {
            MasaKurikulum::factory()->create([
                'periode' => $masaKurikulum,
                'status' => "aktif",
            ]);
        }

        $mataPelajarans = ['Matematika', 'Bahasa Indonesia', 'Bahasa Inggris', 'IPA', 'IPS'];
        foreach($mataPelajarans as $mataPelajaran) {
            MataPelajaran::factory()->create([
                'nama_mapel' => $mataPelajaran,
                'bobot' => random_int(1, max: 10),
            ]);
        }

        StatusSekolah::factory()->count(2)->create();

        Sekolah::factory()->count(10)->create();

        Siswa::factory()->count(50)->create();

        Nilai::factory()->count(50)->create();
    }
}
