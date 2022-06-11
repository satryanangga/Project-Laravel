<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanAnak extends Model
{
    protected $table = 'catatan_anak';
    protected $fillable = ['anak_id', 'tgl_pemeriksaan', 'berat_badan', 'panjang_badan', 'indeks_massa_tubuh'];

    public function dataAnak()
    {
        return $this->belongsTo(DataAnak::class, 'anak_id');
    }
}
