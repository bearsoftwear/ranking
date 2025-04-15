<?php

namespace App\Http\Controllers;

use App\Models\MasaKurikulum;
use Illuminate\Http\Request;

class MasaKurikulumController extends Controller
{
    public function index()
    {
        return MasaKurikulum::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'periode' => ['required'],
            'status' => ['required'],
        ]);

        return MasaKurikulum::create($data);
    }

    public function show(MasaKurikulum $masaKurikulum)
    {
        return $masaKurikulum;
    }

    public function update(Request $request, MasaKurikulum $masaKurikulum)
    {
        $data = $request->validate([
            'periode' => ['required'],
            'status' => ['required'],
        ]);

        $masaKurikulum->update($data);

        return $masaKurikulum;
    }

    public function destroy(MasaKurikulum $masaKurikulum)
    {
        $masaKurikulum->delete();

        return response()->json();
    }
}
