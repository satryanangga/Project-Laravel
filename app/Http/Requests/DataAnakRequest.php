<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataAnakRequest extends FormRequest
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
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'berat_lahir' => 'required',
            'panjang_lahir' => 'required',
            'lingkar_kepala' => 'required',
        ];
    }
}
