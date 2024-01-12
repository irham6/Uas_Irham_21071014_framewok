<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Siswa;
use App\Models\NilaiIrham;
use Illuminate\Http\Request;

class NilaiIrhamController extends Controller
{
    public function index()
    {
        //Query builder biaya
        // $myjadwal   = new Jadwal();
        // $jadwal = $myjadwal->list_jadwal();

        //Menggunakan Eloquent
        $nilai = NilaiIrham::get();      
       return view('nilaiirham.index', compact('nilai'));
    }
    public function store(Request $request)
    {
        $nilai = new NilaiIrham();
        $nilai->id_siswa = $request->nilai_pelajaran;
        $nilai->nilai_pelajaran = $request->nilai_pelajaran;
        $nilai->nilai_uts = $request->nilai_uts;
        $nilai->save();
        return redirect()->route('nilai.index');

    }
    public function cetak_nilai (){
        $nilai = NilaiIrham::get();
        return view ('nilaiirham.cetak_nilai', compact('nilai'));
    }
}
