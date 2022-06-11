<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatatanAnakRequest extends FormRequest
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
            'nama_anak' => 'required',
            'tgl_pemeriksaan' => 'required',
            'panjang_badan' => 'required',
            'indeks_massa_tubuh' => 'required',
            'berat_badan' => 'required',
        ];
    }
}
