<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwal extends Model
{
    //
    protected $table = 'jadwals';
    protected $fillable=['matapelajaran_id','lokal_id'];
    public function lokal():belongsTo{
        return $this->belongsTo(Lokal::class);
    }
    public function matapelajaran():belongsTo{
        return $this->belongsTo(Matapelajaran::class);
    }
}
