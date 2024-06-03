@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Tambah data Mata Kuliah</h1>
    <hr />
    <form action="{{ route('mata_kuliahs.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="kode" class="form-control" placeholder="Kode" required>
                </div>
                <div class="col">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Matkul" required>
                </div>
                <div class="col">
                    <input type="number" name="sks" class="form-control" placeholder="SKS" required>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
    