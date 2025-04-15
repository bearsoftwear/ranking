<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return Kelas::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tingkat_kelas' => ['required'],
        ]);

        return Kelas::create($data);
    }

    public function show(Kelas $kelas)
    {
        return $kelas;
    }

    public function update(Request $request, Kelas $kelas)
    {
        $data = $request->validate([
            'tingkat_kelas' => ['required'],
        ]);

        $kelas->update($data);

        return $kelas;
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete();

        return response()->json();
    }
}
