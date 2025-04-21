<?php

namespace App\Http\Controllers;

    use App\Models\Grade;
    use Illuminate\Http\Request;
    
    class GradeController extends Controller {
        public function index()
        {
        return Grade::all();
        }
        
        public function store(Request $request)
        {
        $data = $request->validate([
        'student_id' => ['required', 'exists:students'],
'subject_id' => ['required', 'exists:subjects'],
'nilai' => ['required', 'numeric'],
        ]);
        
        return Grade::create($data);
        }
        
        public function show(Grade $grade)
        {
        return $grade;
        }
        
        public function update(Request $request, Grade $grade)
        {
        $data = $request->validate([
        'student_id' => ['required', 'exists:students'],
'subject_id' => ['required', 'exists:subjects'],
'nilai' => ['required', 'numeric'],
        ]);
        
        $grade->update($data);
        
        return $grade;
        }
        
        public function destroy(Grade $grade)
        {
        $grade->delete();
        
        return response()->json();
        }
    }
