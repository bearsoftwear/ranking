<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        return MataPelajaran::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_mapel' => ['required'],
            'bobot' => ['required', 'numeric'],
        ]);

        return MataPelajaran::create($data);
    }

    public function show(MataPelajaran $mataPelajaran)
    {
        return $mataPelajaran;
    }

    public function update(Request $request, MataPelajaran $mataPelajaran)
    {
        $data = $request->validate([
            'nama_mapel' => ['required'],
            'bobot' => ['required', 'numeric'],
        ]);

        $mataPelajaran->update($data);

        return $mataPelajaran;
    }

    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->delete();

        return response()->json();
    }
}
