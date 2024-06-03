@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Profile Mahasiswa</h1>
    <hr />

    <div class="form-group">
        <label for="photo" class="form-label">Foto</label>
        <img src="{{asset('asset/img/')}}/{{$mahasiswa->photo}}" alt="" width="100px">
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $mahasiswa->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="Nim" value="{{ $mahasiswa->nim }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $mahasiswa->email }}" readonly>
        </div>
    </div>

    <a href="{{ route('mahasiswas.index') }}" type="button" class="btn btn-danger">Back</a>
    @if(Auth::user()->role == 'operator')
    <a href="/mahasiswas/{{$mahasiswa->id}}/edit" type="button" class="btn btn-warning">Edit</a>
    @endif
@endsection