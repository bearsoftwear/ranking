<?php

namespace App\Http\Controllers;

    use App\Models\School;
    use Illuminate\Http\Request;
    
    class SchoolController extends Controller {
        public function index()
        {
        return School::all();
        }
        
        public function store(Request $request)
        {
        $data = $request->validate([
        'npsn' => ['required'],
'nama_sekolah' => ['required'],
'kecamatan_id' => ['required', 'exists:kecamatans'],
        ]);
        
        return School::create($data);
        }
        
        public function show(School $school)
        {
        return $school;
        }
        
        public function update(Request $request, School $school)
        {
        $data = $request->validate([
        'npsn' => ['required'],
'nama_sekolah' => ['required'],
'kecamatan_id' => ['required', 'exists:kecamatans'],
        ]);
        
        $school->update($data);
        
        return $school;
        }
        
        public function destroy(School $school)
        {
        $school->delete();
        
        return response()->json();
        }
    }
