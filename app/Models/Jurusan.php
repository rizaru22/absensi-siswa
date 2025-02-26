<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //
    protected $table= 'jurusans';
    protected $fillable=['nama_jurusan','kode_jurusan','guru_id'];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
