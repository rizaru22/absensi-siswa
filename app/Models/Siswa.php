<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fillable=['nisn','nama','alamat','WA_Siswa','nama_ortu','WA_Ortu','foto','user_id'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function keteranganabsen():hasMany{
        return $this->hasMany(Keteranganabsen::class);
    }
}
