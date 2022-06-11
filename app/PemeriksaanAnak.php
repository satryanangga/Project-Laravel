<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanAnak extends Model
{
    protected $table = 'pemeriksaan_anak';

    protected $fillable = ['anak_id', 'tanggal_pemeriksaan', 'berat_badan', 'panjang_lahir', 'suhu', 'keluhan_anak', 'frekuensi_nadi', 'frekuensi_detak_jantung', 'resep_obat', 'pesan'];

    public function dataAnak()
    {
        return $this->belongsTo(DataAnak::class, 'anak_id');
    }

}
