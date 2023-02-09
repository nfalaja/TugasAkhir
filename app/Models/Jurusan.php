<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    public $guarded = [];

    protected $table = 'jurusans';

    public function siswa()
    {
        return $this->hasMany('App\Models\Siswa', 'siswa_id', 'id');
    }
}
