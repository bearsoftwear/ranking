<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index()
    {
        // return Inertia::render('students/index');
        return view('import');
    }

    public function import_excel(Request $request)
    {
        $request->validate([
            'file' => 'mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        $nama_file = rand().$file->getClientOriginalName();

        $file->move('file_siswa',$nama_file);

        Excel::import(new StudentsImport, public_path('/file_siswa/'.$nama_file));

        return redirect('/students')->with('success', 'All good!');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nisn' => ['required', 'unique:students', 'numeric', 'digits:10'],
            'nama_lengkap' => ['required'],
            'jenis_kelamin' => ['required', 'in:L,P'],
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
            'nisn' => ['required', 'unique:students', 'numeric', 'digits:10'],
            'nama_lengkap' => ['required'],
            'jenis_kelamin' => ['required', 'in:L,P'],
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
