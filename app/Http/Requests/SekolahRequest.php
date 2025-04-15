<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SekolahRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'npsn' => ['required'],
            'nama_sekolah' => ['required'],
            'kecamatan_id' => ['required', 'exists:kecamatans'],
            'jenjang_sekolah_id' => ['required', 'exists:jenjang_sekolahs'],
            'status_sekolah_id' => ['required', 'exists:status_sekolahs'],
            'bentuk_pendidikan' => ['required'],
            'nama_kepala_sekolah' => ['nullable'],
            'nip_kepala_sekolah' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
