<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        return Kecamatan::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kecamatan' => ['required'],
        ]);

        return Kecamatan::create($data);
    }

    public function show(Kecamatan $kecamatan)
    {
        return $kecamatan;
    }

    public function update(Request $request, Kecamatan $kecamatan)
    {
        $data = $request->validate([
            'nama_kecamatan' => ['required'],
        ]);

        $kecamatan->update($data);

        return $kecamatan;
    }

    public function destroy(Kecamatan $kecamatan)
    {
        $kecamatan->delete();

        return response()->json();
    }
}
