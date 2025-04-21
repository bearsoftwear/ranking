<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        return UserProfile::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => ['required', 'exists:users'],
            'kecamatan_id' => ['required', 'exists:kecamatans'],
            'subject_id' => ['required', 'exists:subjects'],
        ]);

        return UserProfile::create($data);
    }

    public function show(UserProfile $userProfile)
    {
        return $userProfile;
    }

    public function update(Request $request, UserProfile $userProfile)
    {
        $data = $request->validate([
            'user_id' => ['required', 'exists:users'],
            'kecamatan_id' => ['required', 'exists:kecamatans'],
            'subject_id' => ['required', 'exists:subjects'],
        ]);

        $userProfile->update($data);

        return $userProfile;
    }

    public function destroy(UserProfile $userProfile)
    {
        $userProfile->delete();

        return response()->json();
    }
}
