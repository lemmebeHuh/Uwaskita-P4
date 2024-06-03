@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Edit Data DOsen</h1>
    <hr />
    <form action="{{ route('dosens.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <h6>Nama</h6>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $dosen->nama }}">
                </div>
                <div class="col">
                    <h6>NIDN</h6>
                    <input type="text" name="nidn" class="form-control" placeholder="NIDN" value="{{ $dosen->nidn }}">
                </div>
                <!-- <div class="col">
                    <select name="genderMhs" id="" class="form-control" placeholder="Jenis Kelamin" value="{{ $dosen->genderMhs }}">
                        <option value="{{$dosen->genderMhs}}">{{$dosen->genderMhs}}</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div> -->
            </div>

                <!-- <div class="col">
                    <input type="text" name="kotaLahirMhs" class="form-control" placeholder="Kota Kelahiran" value="{{ $dosen->kotaLahirMhs }}">
                </div>
                <div class="col">
                    <input type="date" name="tanggalLahirMhs" class="form-control" placeholder="Tanggal Lahir" value="{{ $dosen->tanggalLahirMhs }}">
                </div> -->
                
            

            <div class="row mb-3">
                <div class="col">
                    <h6>E-mail</h6>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $dosen->email }}">
                </div>
                <!-- <div class="col">
                    <input type="text" name="teleponMhs" class="form-control" placeholder="No.Telepon" value="{{ $dosen->teleponMhs }}">
                </div> -->
            </div>

            <!-- <div class="row mb-3">
                <div class="col">
                    <input type="text" name="fakultasMhs" class="form-control" placeholder="Fakultas" value="{{ $dosen->fakultasMhs }}">
                </div>
                <div class="col">
                    <input type="text" name="jurusanMhs" class="form-control" placeholder="Jurusan" value="{{ $dosen->jurusanMhs }}">
                </div>
                <div class="col">
                    <input type="text" name="semesterMhs" class="form-control" placeholder="Semester" value="{{ $dosen->semesterMhs }}">
                </div>
                
                <div class="col">
                    <select name="kelasMhs" id="" class="form-control" placeholder="Kelas" value="{{ $dosen->kelasMhs }}">
                        <option value="{{ $dosen->kelasMhs }}">{{ $dosen->kelasMhs }}</option>
                        <option value="Reguler">Reguler</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                    <input type="text" name="kelasMhs" class="form-control" placeholder="Kelas" required> 
                </div>
            </div> -->
            
            <!-- <div class="col mb-3">
                <div class="col">
                    <textarea class="form-control" name="alamatMhs" placeholder="Alamat" value="{{ $dosen->alamatMhs }}">{{ $dosen->alamatMhs }}</textarea>
                </div>
            </div> -->
                
            <div class="col-md-4">
                <div class="form-group">
                    <label for="photo" class="form-label">Foto</label>
                    <img src="{{asset('asset/img/')}}/{{$dosen->photo}}" alt="" width="100px">
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