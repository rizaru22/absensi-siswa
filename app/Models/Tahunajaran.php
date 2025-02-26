<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tahunajaran extends Model
{
    //
    protected $table = 'tahunajarans';
    protected $fillable=['tahun_ajaran','status'];

    public function matapelajaran():hasMany{
        return $this->hasMany(Matapelajaran::class);
    }
}
