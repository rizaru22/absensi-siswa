<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matapelajaran extends Model
{
    //
    protected $table = 'matapelajarans';
    protected $fillable=['nama_matapelajaran','kode_matapelajaran','tingkat','tahunajaran_id'];

    public function tahunajaran():belongsTo{
        return $this->belongsTo(Tahunajaran::class);
    }
    public function mengajar():hasMany{
        return $this->hasMany(Mengajar::class);
    }
}
