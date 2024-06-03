@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Profile Dosen</h1>
    <hr />

    <div class="form-group">
        <label for="photo" class="form-label">Foto</label>
        <img src="{{asset('asset/img/')}}/{{$dosen->photo}}" alt="" width="100px">
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $dosen->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="nidn" class="form-control" placeholder="nidn" value="{{ $dosen->nidn }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $dosen->email }}" readonly>
        </div>
    </div>

    <a href="{{ route('dosens.index') }}" type="button" class="btn btn-danger">Back</a>
    @if(Auth::user()->role == 'operator')
    <a href="/dosens/{{$dosen->id}}/edit" type="button" class="btn btn-warning">Edit</a>
    @endif
@endsection