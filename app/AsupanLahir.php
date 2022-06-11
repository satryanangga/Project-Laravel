<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsupanLahir extends Model
{
    protected $table = 'asupan_lahir';
    protected $fillable = ['name', 'catatan_persalinan_id'];
    public $timestamps = false;

    public function catatanPersalinan()
    {
        return $this->belongsTo(CatatanPersalinan::class);
    }

}
