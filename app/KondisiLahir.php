<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiLahir extends Model
{
    protected $table = 'kondisi_lahir';

    protected $fillable = ['name', 'catatan_persalinan_id'];

    public function catatanPersalinan()
    {
        return $this->belongsTo(CatatanPersalinan::class);
    }
}
