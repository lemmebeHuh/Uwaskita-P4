@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Tambah data Mahasiswa</h1>
    <hr />
    <form action="{{ route('mahasiswas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lenkap" required>
                </div>
                <div class="col">
                    <input type="text" name="nim" class="form-control" placeholder="Nim" required>
                </div>
            </div>
            

            <div class="row mb-3">
                <div class="col">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="photo">Foto Mahasiswa:</label>
                    <input type="file" name="photo" id="photo" class="form-control-file">
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
    