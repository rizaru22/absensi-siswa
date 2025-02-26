<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mengajar extends Model
{
    //
    protected $table = 'mengajars';
    protected $fillable=['guru_id','matapelajaran_id'];

    public function guru():BelongsTo{
        return $this->belongsTo(Guru::class);
    }
    public function matapelajaran():BelongsTo{
        return $this->belongsTo(Matapelajaran::class);
    }
}
