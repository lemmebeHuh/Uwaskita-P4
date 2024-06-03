@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Edit Data Mahasiswa</h1>
    <hr />
    <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST" enctype=" multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $mahasiswa->nama }}">
                </div>
                <!-- <div class="col">
                    <select name="genderMhs" id="" class="form-control" placeholder="Jenis Kelamin" value="{{ $mahasiswa->genderMhs }}">
                        <option value="{{$mahasiswa->genderMhs}}">{{$mahasiswa->genderMhs}}</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div> -->
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="nim" class="form-control" placeholder="Nim" value="{{ $mahasiswa->nim }}">
                </div>
                <!-- <div class="col">
                    <input type="text" name="kotaLahirMhs" class="form-control" placeholder="Kota Kelahiran" value="{{ $mahasiswa->kotaLahirMhs }}">
                </div>
                <div class="col">
                    <input type="date" name="tanggalLahirMhs" class="form-control" placeholder="Tanggal Lahir" value="{{ $mahasiswa->tanggalLahirMhs }}">
                </div> -->
                
            </div>
            

            <div class="row mb-3">
                <div class="col">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $mahasiswa->email }}">
                </div>
                <!-- <div class="col">
                    <input type="text" name="teleponMhs" class="form-control" placeholder="No.Telepon" value="{{ $mahasiswa->teleponMhs }}">
                </div> -->
            </div>

            <!-- <div class="row mb-3">
                <div class="col">
                    <input type="text" name="fakultasMhs" class="form-control" placeholder="Fakultas" value="{{ $mahasiswa->fakultasMhs }}">
                </div>
                <div class="col">
                    <input type="text" name="jurusanMhs" class="form-control" placeholder="Jurusan" value="{{ $mahasiswa->jurusanMhs }}">
                </div>
                <div class="col">
                    <input type="text" name="semesterMhs" class="form-control" placeholder="Semester" value="{{ $mahasiswa->semesterMhs }}">
                </div>
                
                <div class="col">
                    <select name="kelasMhs" id="" class="form-control" placeholder="Kelas" value="{{ $mahasiswa->kelasMhs }}">
                        <option value="{{ $mahasiswa->kelasMhs }}">{{ $mahasiswa->kelasMhs }}</option>
                        <option value="Reguler">Reguler</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                    <input type="text" name="kelasMhs" class="form-control" placeholder="Kelas" required> 
                </div>
            </div> -->
            
            <!-- <div class="col mb-3">
                <div class="col">
                    <textarea class="form-control" name="alamatMhs" placeholder="Alamat" value="{{ $mahasiswa->alamatMhs }}">{{ $mahasiswa->alamatMhs }}</textarea>
                </div>
            </div> -->
                
            <div class="col-md-4">
                <div class="form-group">
                    <label for="photo" class="form-label">Foto</label>
                    <img src="{{asset('asset/img/')}}/{{$mahasiswa->photo}}" alt="" width="100px">
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection