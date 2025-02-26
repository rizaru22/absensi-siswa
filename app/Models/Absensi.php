<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Absensi extends Model
{
    //
    protected $table = 'absensis';
    protected $fillable=['jam_pelajaran','tanggal','guru_id','foto_guru'];

    public function guru():BelongsTo{
        return $this->belongsTo(Guru::class);
    }

    public function keteranganabsen():hasMany{
        return $this->hasMany(Keteranganabsen::class);
    }

}
