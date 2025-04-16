<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nisn' => ['required'],
            'nik' => ['required'],
            'nama' => ['required'],
            'jenis_kelamin' => ['required'],
            'tanggal_lahir' => ['required', 'date'],
            'nama_ibu_kandung' => ['required'],
            'sekolah_id' => ['required', 'exists:sekolahs'],
            'kelas' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
