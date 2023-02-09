<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Izin;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    public function masuk()
    {
        $gurus = Guru::all();
        $jurusans = Jurusan::all();
        $kelass = Kelas::all();
        $siswas = Siswa::all();
        return view('masterizinmasuk', compact('gurus', 'jurusans', 'kelass', 'siswas'));
    }
    
    public function keluar()
    {
        $gurus = Guru::all();
        $jurusans = Jurusan::all();
        $kelass = Kelas::all();
        $siswas = Siswa::all();
        return view('masterizinkeluar', compact('gurus', 'jurusans', 'kelass', 'siswas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "guru_id" => "required",
            "siswa_id" => "required",
            "alasan" => "required",
            "keterangan" => "required",
            "jam" => "required",
        ]);

        Izin::create($validated);
        return redirect('/izinmasuk');
    }

    public function history(){
        return view('history');
    }
}
