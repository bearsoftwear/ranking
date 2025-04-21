<?php

namespace App\Imports;

use App\Models\School;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentsImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'nama_lengkap' => $row[0],
            'jenis_kelamin' => $row[1],
            'nisn' => $row[2],
            'school_id' => '1' //School::where('npsn', $row[3])->first()->id,
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
