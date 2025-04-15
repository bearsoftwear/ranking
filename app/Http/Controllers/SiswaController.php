<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        return Siswa::all();
    }

    public function store(SiswaRequest $request)
    {
        return Siswa::create($request->validated());
    }

    public function show(Siswa $siswa)
    {
        return $siswa;
    }

    public function update(SiswaRequest $request, Siswa $siswa)
    {
        $siswa->update($request->validated());

        return $siswa;
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return response()->json();
    }
}
