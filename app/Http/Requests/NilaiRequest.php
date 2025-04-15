<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NilaiRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'siswa_id' => ['required', 'exists:siswas'],
            'mata_pelajaran_id' => ['required', 'exists:mata_pelajarans'],
            'masa_kurikulum_id' => ['required', 'exists:masa_kurikulums'],
            'nilai' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
