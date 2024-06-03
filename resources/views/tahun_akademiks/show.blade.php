@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Detail Tahun Akademik</h1>
    <hr />

    {{-- <div class="form-group">
        <label for="fotoMhs" class="form-label">Foto</label>
        <img src="{{asset('asset/img/mhs/')}}/{{$mahasiswa->fotoMhs}}" alt="" width="100px">
    </div> --}}

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tahun</label>
            <input type="text" name="tahun" class="form-control" placeholder="Nama Lengkap" value="{{ $tahunAkademik->tahun }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Semester</label>
            <input type="text" name="semester" class="form-control" placeholder="nidn" value="{{ $tahunAkademik->semester }}" readonly>
        </div>
        
    </div>

    <a href="{{ route('tahun_akademiks.index') }}" type="button" class="btn btn-danger">Back</a>
    @if(Auth::user()->role == 'operator')
    <a href="/tahun_akademiks/{{$tahunAkademik->id}}/edit" type="button" class="btn btn-warning">Edit</a>
    @endif
@endsection