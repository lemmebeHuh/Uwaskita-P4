@extends('dashboard')

@section('MainContent')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1>Detail Nilai</h1>
      <a href="{{ route('nilais.index') }}" class="btn btn-primary">Kembali</a>
    </div>

    <div class="card rounded-30">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Nama Mahasiswa</th>
              <th scope="col">Mata Kuliah</th>
              <th scope="col">Tahun Akademik</th>
              <th scope="col">Nilai Tugas</th>
              <th scope="col">Nilai UTS</th>
              <th scope="col">Nilai UAS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $nilai->mahasiswa->nama }}</td>
              <td>{{ $nilai->mataKuliah->nama }}</td>
              <td>{{ $nilai->tahunAkademik->tahun }} - {{ $nilai->tahunAkademik->semester }}</td>
              <td>{{ $nilai->nilai_tugas }}</td>
              <td>{{ $nilai->nilai_uts }}</td>
              <td>{{ $nilai->nilai_uas }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
