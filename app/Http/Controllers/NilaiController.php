<?php

namespace App\Http\Controllers;

use App\Http\Requests\NilaiRequest;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function index()
    {
        return Nilai::all();
    }

    public function store(NilaiRequest $request)
    {
        return Nilai::create($request->validated());
    }

    public function show(Nilai $nilai)
    {
        return $nilai;
    }

    public function update(NilaiRequest $request, Nilai $nilai)
    {
        $nilai->update($request->validated());

        return $nilai;
    }

    public function destroy(Nilai $nilai)
    {
        $nilai->delete();

        return response()->json();
    }
}
