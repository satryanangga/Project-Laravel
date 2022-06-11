<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataOrtuRequest extends FormRequest
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
            'nik' => 'required|min:16|max:16',
            'nama_ibu' => 'required',
            'tgl_lahir_ibu' => 'required',
            'agama_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'golongan_darah_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nama_ayah' => 'required',
            'tgl_lahir_ayah' => 'required',
            'agama_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'golongan_darah_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'no_tlp' => 'required',
            // 'tgl_penerima_kia' => 'required',
        ];
    }
}
