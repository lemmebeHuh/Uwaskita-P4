@extends('dashboard')
 
@section('MainContent')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Matakuliah</h1>
        @if(Auth::user()->role == 'operator')
        <a href="{{ route('mata_kuliahs.create') }}" class="btn btn-primary">Add Mata Kuliah</a>
        @endif
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class= 'table table-bordered'>
        <thead class="table-dark" style="text-align: center;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kode</th>
                <th scope="col">SKS</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($mataKuliahs->count() > 0)
                @foreach($mataKuliahs as $mkl)
                    <tr>
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $mkl->nama }}</td>
                        <td class="align-middle">{{ $mkl->kode }}</td>
                        <td class="align-middle">{{ $mkl->sks }}</td>
                        <td class="align-middle">
                            <div role="group" style="text-align: center;">
                            @if(Auth::user()->role == 'operator')
                            <a href="{{ route('mata_kuliahs.show', $mkl->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('mata_kuliahs.edit', $mkl->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('mata_kuliahs.destroy', $mkl->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                            @endif
                            @if(Auth::user()->role == 'matakuliah')
                            <a href="{{ route('mata_kuliahs.show', $mkl->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            @endif
                            @if(Auth::user()->role == 'matakuliah')
                            <a href="{{ route('mata_kuliahs.show', $mkl->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            @endif
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="8">Data Mata Kuliah tidak ditemukan!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection