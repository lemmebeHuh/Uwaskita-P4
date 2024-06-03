<?php
namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::orderBy('created_at', 'DESC')->get();
        return view('dosens.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosens.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|unique:dosens',
            'email' => 'required|email|unique:dosens',
            'photo' => 'required'
        ]);

        if ($request->file('photo')){
            $fileName = $request->nama.'.'.$request->photo->extension();
            $request->photo->move(public_path('asset/img'), $fileName);
        
        }
        else {
            $fileName = 'default.jpg';
        }

        Dosen::create($request->all());

        return redirect()->route('dosens.index')
                         ->with('success', 'Dosen berhasil ditambahkan.');
    }

    function profile()
    {
        return view('profile');
    }
    
    public function show(Dosen $dosen)
    {
        return view('dosens.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|unique:dosens,nidn,' . $dosen->id,
            'email' => 'required|email|unique:dosens,email,' . $dosen->id,
        ]);

        $dosen->update($request->all());

        return redirect()->route('dosens.index')
                         ->with('success', 'Dosen berhasil diperbarui.');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosens.index')
                         ->with('success', 'Dosen berhasil dihapus.');
    }
}
