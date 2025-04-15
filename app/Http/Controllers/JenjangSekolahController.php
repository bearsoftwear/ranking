<?php

namespace App\Http\Controllers;

use App\Models\JenjangSekolah;
use Illuminate\Http\Request;

class JenjangSekolahController extends Controller
{
    public function index()
    {
        return JenjangSekolah::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_jenjang' => ['required'],
        ]);

        return JenjangSekolah::create($data);
    }

    public function show(JenjangSekolah $jenjangSekolah)
    {
        return $jenjangSekolah;
    }

    public function update(Request $request, JenjangSekolah $jenjangSekolah)
    {
        $data = $request->validate([
            'nama_jenjang' => ['required'],
        ]);

        $jenjangSekolah->update($data);

        return $jenjangSekolah;
    }

    public function destroy(JenjangSekolah $jenjangSekolah)
    {
        $jenjangSekolah->delete();

        return response()->json();
    }
}
