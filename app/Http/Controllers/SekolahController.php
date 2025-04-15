<?php

namespace App\Http\Controllers;

use App\Http\Requests\SekolahRequest;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    public function index()
    {
        return Sekolah::all();
    }

    public function store(SekolahRequest $request)
    {
        return Sekolah::create($request->validated());
    }

    public function show(Sekolah $sekolah)
    {
        return $sekolah;
    }

    public function update(SekolahRequest $request, Sekolah $sekolah)
    {
        $sekolah->update($request->validated());

        return $sekolah;
    }

    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete();

        return response()->json();
    }
}
