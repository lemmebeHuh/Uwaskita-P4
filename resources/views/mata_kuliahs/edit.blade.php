@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Edit Data Mata Kuliah</h1>
    <hr />
    <form action="{{ route('mata_kuliahs.update', $mataKuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <h6>Nama</h6>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Matkul" value="{{ $mataKuliah->nama }}">
                </div>
                <div class="col">
                    <h6>Kode</h6>
                    <input type="text" name="kode" class="form-control" placeholder="NIDN" value="{{ $mataKuliah->kode }}">
                </div>
                <div class="col">
                    <h6>SKS</h6>
                    <input type="text" name="sks" class="form-control" placeholder="SKS" value="{{ $mataKuliah->sks }}">
                </div>
                <!-- <div class="col">
                    <select name="genderMhs" id="" class="form-control" placeholder="Jenis Kelamin" value="{{ $mataKuliah->genderMhs }}">
                        <option value="{{$mataKuliah->genderMhs}}">{{$mataKuliah->genderMhs}}</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div> -->
            </div>

                <!-- <div class="col">
                    <input type="text" name="kotaLahirMhs" class="form-control" placeholder="Kota Kelahiran" value="{{ $mataKuliah->kotaLahirMhs }}">
                </div>
                <div class="col">
                    <input type="date" name="tanggalLahirMhs" class="form-control" placeholder="Tanggal Lahir" value="{{ $mataKuliah->tanggalLahirMhs }}">
                </div> -->
                
            

            <!-- <div class="row mb-3">
                <div class="col">
                    <h6>E-mail</h6>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $mataKuliah->email }}">
                </div>
                <div class="col">
                    <input type="text" name="teleponMhs" class="form-control" placeholder="No.Telepon" value="{{ $mataKuliah->teleponMhs }}">
                </div>
            </div> -->

            <!-- <div class="row mb-3">
                <div class="col">
                    <input type="text" name="fakultasMhs" class="form-control" placeholder="Fakultas" value="{{ $mataKuliah->fakultasMhs }}">
                </div>
                <div class="col">
                    <input type="text" name="jurusanMhs" class="form-control" placeholder="Jurusan" value="{{ $mataKuliah->jurusanMhs }}">
                </div>
                <div class="col">
                    <input type="text" name="semesterMhs" class="form-control" placeholder="Semester" value="{{ $mataKuliah->semesterMhs }}">
                </div>
                
                <div class="col">
                    <select name="kelasMhs" id="" class="form-control" placeholder="Kelas" value="{{ $mataKuliah->kelasMhs }}">
                        <option value="{{ $mataKuliah->kelasMhs }}">{{ $mataKuliah->kelasMhs }}</option>
                        <option value="Reguler">Reguler</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                    <input type="text" name="kelasMhs" class="form-control" placeholder="Kelas" required> 
                </div>
            </div> -->
            
            <!-- <div class="col mb-3">
                <div class="col">
                    <textarea class="form-control" name="alamatMhs" placeholder="Alamat" value="{{ $mataKuliah->alamatMhs }}">{{ $mataKuliah->alamatMhs }}</textarea>
                </div>
            </div> -->
                
            <!-- <div class="col-md-4">
                <div class="form-group">
                    <label for="fotoMhs" class="form-label">Foto</label>
                    <img src="{{asset('asset/img/mhs/')}}/{{$mataKuliah->fotoMhs}}" alt="" width="100px">
                    <input type="file" name="fotoMhs" id="fotoMhs" class="form-control">
                </div>
            </div> -->
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection