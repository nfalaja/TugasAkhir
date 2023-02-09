<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'izins';

    public function guru(){
        return $this -> belongsTo('App\Models\Guru', 'guru_id' );
    }

    public function siswa(){
        return $this -> belongsTo('App\Models\Siswa', 'siswa_id' );
    }
}
