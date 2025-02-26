<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keteranganabsen extends Model
{
    //
    protected $table = 'keteranganabsens';
    protected $fillable=['absensi_id','siswa_id','keterangan','status'];

    public function absensi():BelongsTo{
        return $this->belongsTo(Absensi::class);
    }
    public function siswa():BelongsTo{
        return $this->belongsTo(Siswa::class);
    }
}
