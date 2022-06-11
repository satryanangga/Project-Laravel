<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    protected $table = 'data_anak';

    protected $fillable = ['nama', 'ortu_id', 'jk', 'tempat_lahir', 'tgl_lahir', 'berat_lahir', 'panjang_lahir', 'lingkar_kepala'];

    public function dataOrtu()
    {
        return $this->belongsTo(DataOrtu::class, 'ortu_id');
    }

    public $with = [
        'catatanAnak'
    ];

    public function catatanAnak()
    {
        return $this->hasOne(CatatanAnak::class, 'anak_id');
    }

    public function pemeriksaanAnak()
    {
        return $this->hasOne(PemeriksaanAnak::class, 'anak_id');
    }

}
