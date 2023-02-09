<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'siswas';

    public function izin()
    {
        return $this->hasMany('App\Models\Izin', 'siswa_id');
    }

    public function jurusan()
    {
        return $this->belongsTo('App\Models\Jurusan', 'jurusan_id');
    }

    public function kelas(){
        return $this->belongsTo('App\Models\Kelas', 'kelas_id');
    }
}
