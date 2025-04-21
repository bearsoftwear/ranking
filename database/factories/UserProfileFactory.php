<?php

namespace Database\Factories;

use App\Models\Kecamatan;
use App\Models\Subject;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UserProfileFactory extends Factory
{
    protected $model = UserProfile::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::inRandomOrder()->first()->id,
            'kecamatan_id' => Kecamatan::inRandomOrder()->first()->id,
            'subject_id' => Subject::inRandomOrder()->first()->id,
        ];
    }
}
