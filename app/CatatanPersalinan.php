<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CatatanPersalinan extends Model
{
    // public function catatanKehamilan()
    // {
    //     return $this->belongsTo(CatatanKehamilan::class);
    // }
    // protected $casts = [
    //     'kondisi_lahir' => 'array',
    //     'asupan_lahir'=> 'array',
    // ];
    protected $table = 'catatan_persalinan';

    protected $fillable = ['ortu_id', 'tanggal_persalinan', 'penolong_persalinan', 'cara_persalinan', 'keadaan_ibu'];
    protected $with = [
        'kondisiLahirs', 'asupanLahirs', 'dataOrtu'
    ];

    public function getTanggalPersalinanAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d\TH:i');
    }

    public function dataOrtu()
    {
        return $this->belongsTo(DataOrtu::class, 'ortu_id');
    }

    public function kondisiLahirs()
    {
        return $this->hasMany(KondisiLahir::class, 'catatan_persalinan_id');
    }
    public function asupanLahirs()
    {
        return $this->hasMany(AsupanLahir::class, 'catatan_persalinan_id');
    }
    // public function kondisiLahir()
    // {
    //     return $this->belongsTo(KondisiLahir::class);
    // }
}
