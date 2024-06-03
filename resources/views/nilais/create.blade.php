@extends('dashboard')

@section('MainContent')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1>Data Penilaian</h1>
      <a href="{{ route('nilais.index') }}" class="btn btn-primary">Kembali</a>
    </div>

    <form action="{{ route('nilais.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="mahasiswa_id" class="form-label">Mahasiswa:</label>
            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
              @foreach ($mahasiswas as $mahasiswa)
                <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="mata_kuliah_id" class="form-label">Mata Kuliah:</label>
            <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control">
              @foreach ($mataKuliahs as $mataKuliah)
                <option value="{{ $mataKuliah->id }}">{{ $mataKuliah->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="tahun_akademik_id" class="form-label">Tahun Akademik:</label>
            <select name="tahun_akademik_id" id="tahun_akademik_id" class="form-control">
              @foreach ($tahunAkademiks as $tahunAkademik)
                <option value="{{ $tahunAkademik->id }}">{{ $tahunAkademik->tahun }} - {{ $tahunAkademik->semester }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="mb-3">
            <label for="nilai_tugas" class="form-label">Nilai Tugas:</label>
            <input type="number" name="nilai_tugas" id="nilai_tugas" class="form-control">
          </div>

          <div class="mb-3">
            <label for="nilai_uts" class="form-label">Nilai UTS:</label>
            <input type="number" name="nilai_uts" id="nilai_uts" class="form-control">
          </div>

          <div class="mb-3">
            <label for="nilai_uas" class="form-label">Nilai UAS:</label>
            <input type="number" name="nilai_uas" id="nilai_uas" class="form-control">
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
@endsection
