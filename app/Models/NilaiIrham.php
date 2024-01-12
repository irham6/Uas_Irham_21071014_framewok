<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiIrham extends Model
{
    use HasFactory;
    protected $table ="nilai_irhams";
    protected $primaryKey ="id";

    public function guru(){
        return $this->belongsTo(Guru::class, 'id_guru'); //id guru fk
    }
        
    public function pelajaran(){
        return $this->belongsTo(Pelajaran_model::class, 'id_pelajaran');
    }
    public function jadwal(){
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
