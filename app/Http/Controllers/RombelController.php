<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    public function index()
    {
        return Rombel::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'sekolah_id' => ['required', 'exists:sekolahs'],
            'kelas_id' => ['required', 'exists:kelas'],
            'nama_rombel' => ['required'],
        ]);

        return Rombel::create($data);
    }

    public function show(Rombel $rombel)
    {
        return $rombel;
    }

    public function update(Request $request, Rombel $rombel)
    {
        $data = $request->validate([
            'sekolah_id' => ['required', 'exists:sekolahs'],
            'kelas_id' => ['required', 'exists:kelas'],
            'nama_rombel' => ['required'],
        ]);

        $rombel->update($data);

        return $rombel;
    }

    public function destroy(Rombel $rombel)
    {
        $rombel->delete();

        return response()->json();
    }
}
