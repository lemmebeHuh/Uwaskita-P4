@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Detail Mata kuliah</h1>
    <hr />

    {{-- <div class="form-group">
        <label for="fotoMhs" class="form-label">Foto</label>
        <img src="{{asset('asset/img/mhs/')}}/{{$mahasiswa->fotoMhs}}" alt="" width="100px">
    </div> --}}

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $mataKuliah->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode</label>
            <input type="text" name="kode" class="form-control" placeholder="Nama Lengkap" value="{{ $mataKuliah->kode }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">SKS</label>
            <input type="text" name="sks" class="form-control" placeholder="SKS" value="{{ $mataKuliah->sks }}" readonly>
        </div>
        
    </div>

    <a href="{{ route('mata_kuliahs.index') }}" type="button" class="btn btn-danger">Back</a>
    @if(Auth::user()->role == 'operator')
    <a href="/mata_kuliahs/{{$mataKuliah->id}}/edit" type="button" class="btn btn-warning">Edit</a>
    @endif
@endsection