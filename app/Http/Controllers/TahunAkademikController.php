<?php

namespace App\Http\Controllers;

use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    // Menampilkan daftar tahun akademik
    public function index()
    {
        $tahunAkademiks = TahunAkademik::all();
        return view('tahun_akademiks.index', compact('tahunAkademiks'));
    }

    // Menampilkan form untuk membuat tahun akademik baru
    public function create()
    {
        return view('tahun_akademiks.create');
    }

    // Menyimpan tahun akademik baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|unique:tahun_akademiks',
            'semester' => 'required',
        ]);

        TahunAkademik::create($request->all());

        return redirect()->route('tahun_akademiks.index')
                         ->with('success', 'Tahun akademik berhasil ditambahkan.');
    }

    // Menampilkan detail tahun akademik
    public function show(TahunAkademik $tahunAkademik)
    {
        return view('tahun_akademiks.show', compact('tahunAkademik'));
    }

    // Menampilkan form untuk mengedit tahun akademik
    public function edit(TahunAkademik $tahunAkademik)
    {
        return view('tahun_akademiks.edit', compact('tahunAkademik'));
    }

    // Memperbarui data tahun akademik di database
    public function update(Request $request, TahunAkademik $tahunAkademik)
    {
        $request->validate([
            'tahun' => 'required|unique:tahun_akademiks,tahun,' . $tahunAkademik->id,
            'semester' => 'required',
        ]);

        $tahunAkademik->update($request->all());

        return redirect()->route('tahun_akademiks.index')
                         ->with('success', 'Tahun akademik berhasil diperbarui.');
    }

    // Menghapus tahun akademik dari database
    public function destroy(TahunAkademik $tahunAkademik)
    {
        $tahunAkademik->delete();

        return redirect()->route('tahun_akademiks.index')
                         ->with('success', 'Tahun akademik berhasil dihapus.');
    }
}
