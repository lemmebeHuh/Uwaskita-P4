@extends('dashboard')

@section('MainContent')
  <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Daftar Nilai</h1>
    
    @if (Auth::user()->role == 'operator')
    <div class="">

        <a href="{{ route('nilais.create') }}" class="btn btn-success">Tambah data</a>
        <a href="{{ route('nilais.print') }}" class="btn btn-primary">Cetak PDF</a>
    </div>

    @endif
  </div>
  <hr />
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif
  <table class="table table-bordered">
    <thead class="table-dark" style="text-align: center;">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Mahasiswa</th>
        <th scope="col">Mata Kuliah</th>
        <th scope="col">Tahun Akademik</th>
        <th scope="col">Nilai Tugas</th>
        <th scope="col">Nilai UTS</th>
        <th scope="col">Nilai UAS</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @if ($nilais->count() > 0)
        @foreach ($nilais as $nilai)
          <tr>
            <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $nilai->mahasiswa->nama }}</td>
            <td class="align-middle">{{ $nilai->mataKuliah->nama }}</td>
            <td class="align-middle">{{ $nilai->tahunAkademik->tahun }} - {{ $nilai->tahunAkademik->semester }}</td>
            <td class="align-middle">{{ $nilai->nilai_tugas }}</td>
            <td class="align-middle">{{ $nilai->nilai_uts }}</td>
            <td class="align-middle">{{ $nilai->nilai_uas }}</td>
            <td class="align-middle">
                <div role="group" style="text-align: center;">
                    <a href="{{ route('nilais.show', $nilai->id) }}" type="button" class="btn btn-secondary">Lihat</a>
                    @if(Auth::user()->role == 'operator')
                <a href="{{ route('nilais.edit', $nilai->id) }}" type="button" class="btn btn-warning">Edit</a>
                <form action="{{ route('nilais.destroy', $nilai->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger m-0">Hapus</button>
            @endif
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      @else
        <tr>
          <td class="text-center" colspan="8">Data Nilai tidak ditemukan!</td>
        </tr>
      @endif
    </tbody>
  </table>
@endsection
