@extends('dashboard')

@section('MainContent')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1>Edit Nilai</h1>
      <a href="{{ route('nilais.index') }}" class="btn btn-primary">Kembali</a>
    </div>

    <form action="{{ route('nilais.update', $nilai->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="mahasiswa_id" class="form-label">Mahasiswa:</label>
            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
              @foreach ($mahasiswas as $mahasiswa)
                <option value="{{ $mahasiswa->id }}" {{ $nilai->mahasiswa_id == $mahasiswa->id ? 'selected' : '' }}>{{ $mahasiswa->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="mata_kuliah_id" class="form-label">Mata Kuliah:</label>
            <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control">
              @foreach ($mataKuliahs as $mataKuliah)
                <option value="{{ $mataKuliah->id }}" {{ $nilai->mata_kuliah_id == $mataKuliah->id ? 'selected' : '' }}>{{ $mataKuliah->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="tahun_akademik_id" class="form-label">Tahun Akademik:</label>
            <select name="tahun_akademik_id" id="tahun_akademik_id" class="form-control">
              @foreach ($tahunAkademiks as $tahunAkademik)
                <option value="{{ $tahunAkademik->id }}" {{ $nilai->tahun_akademik_id == $tahunAkademik->id ? 'selected' : '' }}>{{ $tahunAkademik->tahun }} - {{ $tahunAkademik->semester }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="mb-3">
            <label for="nilai_tugas" class="form-label">Nilai Tugas:</label>
            <input type="number" name="nilai_tugas" id="nilai_tugas" class="form-control" value="{{ $nilai->nilai_tugas }}">
          </div>

          <div class="mb-3">
            <label for="nilai_uts" class="form-label">Nilai UTS:</label>
            <input type="number" name="nilai_uts" id="nilai_uts" class="form-control" value="{{ $nilai->nilai_uts }}">
          </div>

          <div class="mb-3">
            <label for="nilai_uas" class="form-label">Nilai UAS:</label>
            <input type="number" name="nilai_uas" id="nilai_uas" class="form-control" value="{{ $nilai->nilai_uas }}">
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
