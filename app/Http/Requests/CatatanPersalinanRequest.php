<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatatanPersalinanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_ibu' => 'required',
            'penolong_persalinan' => 'required',
            'tanggal_persalinan' => 'required',
            'cara_persalinan' => 'required',
            'keadaan_ibu' => 'required',
            'kondisi_lahir' => 'required',
            'asupan_lahir' => 'required',
        ];
    }
}
