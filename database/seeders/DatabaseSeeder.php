<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Kecamatan;
use App\Models\School;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserProfile;
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
         User::factory(10)->create();

        User::factory()->create([
            'name' => "Bear Softwear",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('45AEL3tHgGJVcM8'),
            'remember_token' => Str::random(10),
        ]);

        $kecamatans = ['Panggul', 'Munjungan', 'Pule', 'Dongko', 'Tugu', 'Karangan', 'Kampak', 'Watulimo', 'Bendungan', 'Gandusari', 'Trenggalek', 'Pogalan', 'Durenan', 'Suruh'];
        foreach($kecamatans as $kecamatan) {
            Kecamatan::factory()->create([
                'nama_kecamatan' => $kecamatan,
            ]);
        }

        School::factory()->count(50)->create();

        Student::factory()->count(100)->create();

        $subjects = ['Matematika', 'Bahasa Indonesia', 'Bahasa Inggris', 'IPA', 'IPS'];
        foreach($subjects as $subject) {
            Subject::factory()->create([
                'nama_mapel' => $subject,
            ]);
        }

        Grade::factory()->count(200)->create();

        UserProfile::factory(20)->create();
    }
}
