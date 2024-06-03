@extends('dashboard')
 
@section('MainContent')
    <h1 class="mb-0">Edit Data DOsen</h1>
    <hr />
    <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="row mb-3">
                
                <div class="col">
                    <h6>Tahun</h6>
                    <input type="text" name="tahun" class="form-control" placeholder="Tahun Akademik" value="{{ $tahunAkademik->tahun }}">
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
                    <h6>Semester</h6>
                    <input type="text" name="semester" class="form-control" placeholder="Semester" value="{{ $tahunAkademik->semester }}">
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
                
            <!-- <div class="col-md-4">
                <div class="form-group">
                    <label for="fotoMhs" class="form-label">Foto</label>
                    <img src="{{asset('asset/img/mhs/')}}/{{$dosen->fotoMhs}}" alt="" width="100px">
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