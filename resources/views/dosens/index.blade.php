@extends('dashboard')
 
@section('MainContent')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Dosen</h1>
        @if(Auth::user()->role == 'operator')
        <a href="{{ route('dosens.create') }}" class="btn btn-primary">Add Dosens</a>
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
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">NIDN</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($dosens->count() > 0)
                @foreach($dosens as $dsn)
                    <tr>
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle"><img  src= "{{asset('asset/img/')}}/{{$dsn->photo}}" alt="" width='100px' height="100px" style="border-radius: 50%; object-fit:cover" alt='inifoto'></td>
                        <td class="align-middle">{{ $dsn->nama }}</td>
                        <td class="align-middle">{{ $dsn->nidn }}</td>
                        <td class="align-middle">{{ $dsn->email }}</td>
                        <td class="align-middle">
                            <div role="group" style="text-align: center;">
                                <a href="{{ route('dosens.show', $dsn->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                @if(Auth::user()->role == 'operator')
                            <a href="{{ route('dosens.edit', $dsn->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('dosens.destroy', $dsn->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                            @endif
                            @if(Auth::user()->role == 'dosen')
                            <a href="{{ route('dosens.show', $dsn->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            @endif
                            @if(Auth::user()->role == 'dosen')
                            <a href="{{ route('dosens.show', $dsn->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            @endif
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="8">Data Mahasiswa tidak ditemukan!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection