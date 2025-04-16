<?php

namespace App\Http\Controllers;

use App\Models\BentukPendidikan;
use Illuminate\Http\Request;

class BentukPendidikanController extends Controller
{
    public function index()
    {
        return BentukPendidikan::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_bentuk_pendidikan' => ['required'],
        ]);

        return BentukPendidikan::create($data);
    }

    public function show(BentukPendidikan $bentukPendidikan)
    {
        return $bentukPendidikan;
    }

    public function update(Request $request, BentukPendidikan $bentukPendidikan)
    {
        $data = $request->validate([
            'nama_bentuk_pendidikan' => ['required'],
        ]);

        $bentukPendidikan->update($data);

        return $bentukPendidikan;
    }

    public function destroy(BentukPendidikan $bentukPendidikan)
    {
        $bentukPendidikan->delete();

        return response()->json();
    }
}
