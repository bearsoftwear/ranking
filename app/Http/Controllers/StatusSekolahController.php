<?php

namespace App\Http\Controllers;

use App\Http\Resources\StatusSekolahResource;
use App\Models\StatusSekolah;
use Illuminate\Http\Request;

class StatusSekolahController extends Controller
{
    public function index()
    {
        return StatusSekolahResource::collection(StatusSekolah::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_status' => ['required'],
        ]);

        return new StatusSekolahResource(StatusSekolah::create($data));
    }

    public function show(StatusSekolah $statusSekolah)
    {
        return new StatusSekolahResource($statusSekolah);
    }

    public function update(Request $request, StatusSekolah $statusSekolah)
    {
        $data = $request->validate([
            'nama_status' => ['required'],
        ]);

        $statusSekolah->update($data);

        return new StatusSekolahResource($statusSekolah);
    }

    public function destroy(StatusSekolah $statusSekolah)
    {
        $statusSekolah->delete();

        return response()->json();
    }
}
