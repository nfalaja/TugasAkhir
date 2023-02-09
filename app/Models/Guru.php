<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'gurus';

    public function izin(){
        return $this->hasMany('App\Models\Izin', 'guru_id', 'id');
    }
}
