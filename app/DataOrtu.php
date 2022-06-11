<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataOrtu extends Model
{
    protected $table = 'data_ortu';

    protected $fillable = [
        'nik',
        'tgl_penerima_kia',
        'nama_ibu',
        'tgl_lahir_ibu',
        'agama_ibu',
        'pendidikan_ibu',
        'golongan_darah_ibu',
        'pekerjaan_ibu',
        'nama_ayah',
        'tgl_lahir_ayah',
        'agama_ayah',
        'pendidikan_ayah',
        'golongan_darah_ayah',
        'pekerjaan_ayah',
        'alamat',
        'kecamatan',
        'kabupaten',
        'no_tlp',
    ];

    public function dataAnak()
    {
        return $this->hasOne(DataAnak::class);
    }

    public function catatanKehamilan()
    {
        return $this->hasOne(CatatanKehamilan::class);
    }

    public function catatanPersalinan()
    {
        return $this->hasOne(CatatanPersalinan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
