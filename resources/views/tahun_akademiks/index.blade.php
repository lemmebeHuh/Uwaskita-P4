@extends('dashboard')
 
@section('MainContent')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Tahun Akademik</h1>
        @if(Auth::user()->role == 'operator')
        <a href="{{ route('tahun_akademiks.create') }}" class="btn btn-primary">Add Data</a>
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
                <th scope="col">Tahun</th>
                <th scope="col">Semester</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($tahunAkademiks->count() > 0)
                @foreach($tahunAkademiks as $aca)
                    <tr>
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $aca->tahun }}</td>
                        <td class="align-middle">{{ $aca->semester }}</td>
                        <td class="align-middle">
                            <div role="group" style="text-align: center;">
                            @if(Auth::user()->role == 'operator')
                            <a href="{{ route('tahun_akademiks.show', $aca->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('tahun_akademiks.edit', $aca->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('tahun_akademiks.destroy', $aca->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                            @endif
                            @if(Auth::user()->role == 'dosen')
                            <a href="{{ route('tahun_akademiks.show', $aca->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            @endif
                            @if(Auth::user()->role == 'dosen')
                            <a href="{{ route('tahun_akademiks.show', $aca->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            @endif
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="8">Data Tahun Akademik tidak ditemukan!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection