<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDFBarcode;
use Illuminate\Support\Facades\Storage;
use PDF;

class MahasiswaController extends Controller
{
    // Menampilkan daftar mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('created_at', 'DESC')->get();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    // Menampilkan form untuk membuat mahasiswa baru
    public function create()
    {
        return view('mahasiswas.create');
    }

    function profile()
    {
        return view('profile');
    }
    // Menyimpan mahasiswa baru ke database
    public function store(Request $request)
{
    // Validasi data input
    // $rules = [
    //     'nama' => 'required',
    //     'nim' => 'required|unique:mahasiswas',
    //     'email' => 'required|email|unique:mahasiswas',
    //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto profil
    // ];

    if ($request->file('photo')) {
        $fileName = $request->nama . '.' . $request->photo->extension();
        $request->photo->move(public_path('asset/img'), $fileName);
    } else {
        $fileName = 'default.jpg';
    }

    // Membuat array asosiatif dari input yang diperlukan
    $data = [
        'nama' => $request->input('nama'),
        'photo' => $fileName, // Menyimpan nama file yang sudah diunggah
        'nim' => $request->input('nim'),
        'email' => $request->input('email')
    ];

    // Menyimpan data ke database
    Mahasiswa::create($data);

    // Mengarahkan kembali dengan pesan sukses
    return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa added successfully');
}

    // Menampilkan detail mahasiswa
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    // Menampilkan form untuk mengedit mahasiswa
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    // Memperbarui data mahasiswa
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // Validasi data input
        $rules = [
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id, // Cek unik untuk NIM kecuali ID yang sedang diedit
            'email' => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id, // Cek unik untuk email kecuali ID yang sedang diedit
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Perbarui data mahasiswa
        $mahasiswa->update($request->all());

        // Tampilkan pesan sukses
        return redirect()->route('mahasiswas.index')
                         ->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    // Menghapus mahasiswa
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        // Tampilkan pesan sukses
        return redirect()->route('mahasiswas.index')
                         ->with('success', 'Mahasiswa berhasil dihapus.');
    }
    public function generateInvoice()
    {
        $data = [
            'title' => 'Invoice',
            'date' => date('m/d/Y'),
            'invoice_id' => 1234,
            'items' => [
                ['name' => 'Item 1', 'price' => 10],
                ['name' => 'Item 2', 'price' => 20],
            ],
        ];
        
        $pdf = PDF::loadView('invoice', $data);
        
        return $pdf->download('invoice.pdf');
    }
}
