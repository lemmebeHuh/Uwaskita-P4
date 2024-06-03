<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\TahunAkademik;
use Illuminate\Http\Request;
use PDF;



class NilaiController extends Controller
{
    // Menampilkan daftar nilai
    public function index()
    {
        $nilais = Nilai::with(['mahasiswa', 'mataKuliah', 'tahunAkademik'])->get();
        return view('nilais.index', compact('nilais'));
    }


    public function print()
    {
        $nilais = Nilai::with(['mahasiswa', 'mataKuliah', 'tahunAkademik'])->get();
        $pdf = PDF::loadView('nilais.print', compact('nilais'));
        return $pdf->download('daftar_nilai.pdf');
    }

    // Menampilkan form untuk membuat nilai baru
    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $mataKuliahs = MataKuliah::all();
        $tahunAkademiks = TahunAkademik::all();
        return view('nilais.create', compact('mahasiswas', 'mataKuliahs', 'tahunAkademiks'));
    }

    // Menyimpan nilai baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'mata_kuliah_id' => 'required',
            'tahun_akademik_id' => 'required',
            'nilai_tugas' => 'nullable|numeric',
            'nilai_uts' => 'nullable|numeric',
            'nilai_uas' => 'nullable|numeric',
        ]);

        Nilai::create($request->all());

        return redirect()->route('nilais.index')
                         ->with('success', 'Nilai berhasil ditambahkan.');
    }

    // Menampilkan detail nilai
    public function show(Nilai $nilai)
    {
        return view('nilais.show', compact('nilai'));
    }

    // Menampilkan form untuk mengedit nilai
    public function edit(Nilai $nilai)
    {
        $mahasiswas = Mahasiswa::all();
        $mataKuliahs = MataKuliah::all();
        $tahunAkademiks = TahunAkademik::all();
        return view('nilais.edit', compact('nilai', 'mahasiswas', 'mataKuliahs', 'tahunAkademiks'));
    }

    // Memperbarui data nilai di database
    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'mata_kuliah_id' => 'required',
            'tahun_akademik_id' => 'required',
            'nilai_tugas' => 'nullable|numeric',
            'nilai_uts' => 'nullable|numeric',
            'nilai_uas' => 'nullable|numeric',
        ]);

        $nilai->update($request->all());

        return redirect()->route('nilais.index')
                         ->with('success', 'Nilai berhasil diperbarui.');
    }

    // Menghapus nilai dari database
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();

        return redirect()->route('nilais.index')
                         ->with('success', 'Nilai berhasil dihapus.');
    }
    

    public function printNilai()
    {
        $nilai = Nilai::with(['mahasiswa', 'mataKuliah', 'tahunAkademik'])->get();
        return view('nilai.print', compact('nilai'));
    }

}

