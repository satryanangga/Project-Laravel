<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanKehamilan extends Model
{
    protected $table = 'catatan_kehamilan';

    protected $fillable = ['ortu_id', 'hamil_ke', 'hpht', 'htp', 'riwayat_penyakit', 'riwayat_alergi'];

    public function dataOrtu()
    {
        return $this->belongsTo(DataOrtu::class, 'ortu_id');
    }

    // public function catatanPersalinan()
    // {
    //     return $this->hasOne(CatatanPersalinan::class);
    // }
}
