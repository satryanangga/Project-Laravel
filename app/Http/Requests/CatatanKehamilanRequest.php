<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatatanKehamilanRequest extends FormRequest
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
            'hamil_ke' => 'required',
            'hpht' => 'required',
            'htp' => 'required',
            'riwayat_penyakit' => 'required',
            'riwayat_alergi' => 'required',
        ];
    }
}
