<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PemeriksaanAnakRequest extends FormRequest
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
            'tanggal_pemeriksaan' => 'required',
            'berat_badan' => 'required',
            'panjang_lahir' => 'required',
            'suhu' => 'required',
            'keluhan_anak' => 'required',
            'frekuensi_nadi' => 'required',
            'frekuensi_detak_jantung' => 'required',
            'resep_obat' => 'required',
            'pesan' => 'required',
        ];
    }
}
