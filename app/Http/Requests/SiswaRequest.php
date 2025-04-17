<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nisn' => 'required|numeric|unique:siswas,nisn',
            'nik' => 'required|numeric|unique:siswas,nik',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
            'nama_ibu_kandung' => 'required|string',
            'sekolah_id' => 'required|exists:sekolahs',
            'kelas' => 'required|integer|min:1',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
