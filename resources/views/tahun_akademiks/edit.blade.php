@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Edit Data DOsen</h1>
    <hr />
    <form action="{{ route('tahun_akademiks.update', $tahunAkademik->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="row mb-3">
                
                <div class="col">
                    <h6>Tahun</h6>
                    <input type="text" name="tahun" class="form-control" placeholder="Tahun Akademik" value="{{ $tahunAkademik->tahun }}">
                </div>
            

            <div class="row mb-3">
                <div class="col">
                    <h6>Semester</h6>
                    <input type="text" name="semester" class="form-control" placeholder="Semester" value="{{ $tahunAkademik->semester }}">
                </div>
                
            </div>

        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection