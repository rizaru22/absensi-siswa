<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Guru extends Model
{
    //
    protected $table = 'gurus';
    protected $fillable=['nama','nip','wa','user_id'];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function jurusan():HasOne{
        return $this->hasOne(Jurusan::class);
    }
    public function mengajar():hasMany{
        return $this->hasMany(Mengajar::class);
    }
    public function absensi():hasMany{
        return $this->hasMany(Absensi::class);
    }
}
