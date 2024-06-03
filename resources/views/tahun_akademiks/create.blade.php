@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Tambah Tahun Akademik</h1>
    <hr />
    <form action="{{ route('tahun_akademiks.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="row mb-3">
                
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <select name="tahun" id="tahun" class="form-control">
                    @for ($year = 2023; $year <= 2030; $year++)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                    </select>
                </div>

                <div class="col">
                <label for="tahun" class="form-label">Semester</label>
                    <!-- <input type="text" name="genderMhs" class="form-control" placeholder="Jenis Kelamin" required> -->
                    <select class="form-control" name="semester" id="" placeholder="Semester" required>
                            <option value="">Pilih</option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                    </select>
                </div>
            </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
    