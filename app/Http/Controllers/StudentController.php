<?php

namespace App\Http\Controllers;

    use App\Models\Student;
    use Illuminate\Http\Request;
    
    class StudentController extends Controller {
        public function index()
        {
        return Student::all();
        }
        
        public function store(Request $request)
        {
        $data = $request->validate([
        'nisn' => ['required'],
'nama_lengkap' => ['required'],
'jenis_kelamin' => ['required'],
'school_id' => ['required', 'exists:schools'],
        ]);
        
        return Student::create($data);
        }
        
        public function show(Student $student)
        {
        return $student;
        }
        
        public function update(Request $request, Student $student)
        {
        $data = $request->validate([
        'nisn' => ['required'],
'nama_lengkap' => ['required'],
'jenis_kelamin' => ['required'],
'school_id' => ['required', 'exists:schools'],
        ]);
        
        $student->update($data);
        
        return $student;
        }
        
        public function destroy(Student $student)
        {
        $student->delete();
        
        return response()->json();
        }
    }
