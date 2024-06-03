<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = ['mahasiswa_id', 'mata_kuliah_id', 'tahun_akademik_id', 'nilai_tugas', 'nilai_uts', 'nilai_uas'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function tahunAkademik()
    {
        return $this->belongsTo(TahunAkademik::class);
    }
}
