@extends('layout/navbar')
@section('body')


<section id="ppdb" class="">
    <div class="container p-5 my-3 border bg-light">
        <h1 class="text-center">FORM PENDAFTARAN PESERTA DIDIK BARU</h1>
        <h4 class="text-center">MTs Ma'arif Nyatnyono</h4>
        <h4 class="text-center">Tahun Pelajaran 2022/2023</h4>
       
     
          <ul style="list-style-type: none">
            @error('nama')
            <li style="background-color: rgb(248, 145, 138)"  class="ps-5 pt-3 pb-3" class="text-danger">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>  </i>Nama Lengkap Wajib Di Isi</li> 
            @enderror
            @error('asal_sekolah')<li class="text-danger">Asal Sekolah  Wajib Di Isi</li> @enderror
            @error('tempat_lahir') <li class="text-danger">Tempat Lahir Wajib Di Isi</li> @enderror
            @error('tanggal_lahir') <li class="text-danger">Tanggal Lahir Wajib Di Isi</li> @enderror
            @error('nisn') <li class="text-danger">NISN Wajib Di Isi</li> @enderror
            @error('jenis_kelamin') <li class="text-danger">Jenis Kelamin Wajib Di Isi</li> @enderror
            @error('tahun_lulus') <li class="text-danger">Tahun Lulus Wajib Di Isi</li> @enderror
            @error('email') <li class="text-danger">Email Wajib Di Isi</li> @enderror
            @error('nilai_rata') <li class="text-danger">Nilai Rata-Rata Wajib Di Isi</li> @enderror
            @error('kontak_siswa') <li class="text-danger">Kontak Siswa Wajib Di Isi</li> @enderror
            @error('nama_ayah') <li class="text-danger">Nama Ayah Wajib Di Isi</li> @enderror
            @error('pekerjaan_ayah') <li class="text-danger">Pekerjaan Ayah Wajib Di Isi</li> @enderror
            @error('tempat_lahir_ayah') <li class="text-danger">Tempat Lahir Ayah Wajib Di Isi</li> @enderror
            @error('tanggal_lahir_ayah') <li class="text-danger">Tanggal Lahir Ayah Wajib Di Isi</li> @enderror
            @error('kontak_ayah') <li class="text-danger">Kontak Wajib Di Isi</li> @enderror
            @error('nama_ibu') <li class="text-danger">Nama Lengkap Wajib Di Isi</li> @enderror
            @error('pekerjaan_ibu') <li class="text-danger">Nama Ibu Wajib Di Isi</li> @enderror
            @error('tempat_lahir_ibu') <li class="text-danger">Tempat Lahir Ibu Wajib Di Isi</li> @enderror
            @error('tanggal_lahir_ibu') <li class="text-danger">Tanggal Lahir Ibu Wajib Di Isi</li> @enderror
            @error('kontak_ibu') <li class="text-danger">Kontak Ibu Wajib Di Isi</li> @enderror
            @error('alamat_orangtua') <li class="text-danger">Alamat Orang Tua Wajib Di Isi</li> @enderror
            @error('kode_pos') <li class="text-danger">Kode PosWajib Di Isi</li> @enderror
            @error('kecamatan') <li class="text-danger">Kecamatan Wajib Di Isi</li> @enderror
            @error('kabupaten') <li class="text-danger">Kabupaten Wajib Di Isi</li> @enderror
            @error('provinsi') <li class="text-danger">Provinsi Wajib Di Isi</li> @enderror
          </ul>
       
       
        {{-- INPUT DATA SISWA --}}
        <form method="POST" id="form" action="/ppdb">
            @csrf
            <div class="alert alert-secondary mt-5">
                <strong>DATA CALON PESERTA DIDIK</strong>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Lengkap :</label>
                        <input type="text" name="nama" class="form-control" value="{{old('nama')}}" placeholder="Nama Lengkap"  >
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Asal Sekolah :</label>
                        <input type="text" name="asal_sekolah" class="form-control"   placeholder="Asal Sekolah" >
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" >
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control " >
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>NISN :</label>
                        <input type="text" name="nisn" class="form-control " placeholder="NISN" >
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Jenis Kelamin :</label>
                        <select class="form-control " name="jenis_kelamin" >
                            <option>Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Tahun Lulus :</label>
                        <input type="text" name="tahun_lulus" class="form-control " placeholder="Tahun Lulus" >
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email" name="email" class="form-control " placeholder="Email">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nilai Rata-Rata :</label>
                        <input type="text" name="nilai_rata" class="form-control " placeholder="Nilai Rata-Rata" >
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>No. Telp/Hp :</label>
                        <input type="text" name="kontak_siswa" class="form-control " placeholder="Masukan Nomor">
                    </div>
                </div>
            </div>
        {{-- END INPUT DATA SISWA --}}


        {{-- INPUT DATA ORANG TUA / WALI --}}
            {{-- AYAH --}}
            <div class="alert alert-secondary mt-5">
                <strong>DATA ORANG TUA/WALI</strong>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Ayah :</label>
                        <input type="text" name="nama_ayah" class="form-control " placeholder="Nama Lengkap Ayah Kandung" >
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Pekerjaan :</label>
                        <input type="text" name="pekerjaan_ayah" class="form-control " placeholder="Pekerjaan Ayah" >
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir_ayah" class="form-control" placeholder="Tempat Lahir" >
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir_ayah" class="form-control " >
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>No. Telp/Hp :</label>
                        <input type="text" name="kontak_ayah" class="form-control" placeholder="Masukan Nomor">
                    </div>
                </div>
            </div>

            {{-- IBU --}}
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Ibu :</label>
                        <input type="text" name="nama_ibu" class="form-control " placeholder="Nama Lengkap Ibu Kandung" >
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Pekerjaan :</label>
                        <input type="text" name="pekerjaan_ibu" class="form-control " placeholder="Pekerjaan Ibu" >
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir_ibu" class="form-control " placeholder="Tempat Lahir" >
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir_ibu" class="form-control " >
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>No. Telp/Hp :</label>
                        <input type="text" name="kontak_ibu" class="form-control " placeholder="Masukan Nomor">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Alamat :</label>
                        <textarea class="form-control " name="alamat_orangtua" rows="2" id="alamat_orangtua" ></textarea>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Kode Pos :</label>
                        <input type="text" name="kode_pos" class="form-control " placeholder="Kode Pos" >
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm">
                    <div class="form-group">
                        <label>Kecamatan :</label>
                        <input type="text" name="kecamatan" class="form-control " placeholder="Kecamatan" >
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Kabupaten/Kota :</label>
                        <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten/Kota" >
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Provinsi :</label>
                        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" >
                    </div>
                </div>
            </div>

            {{-- WALI MURID --}}
            <div class="row mt-5">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Wali :</label>
                        <input type="text" name="nama_wali" class="form-control" placeholder="Nama Lengkap Wali">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Pekerjaan :</label>
                        <input type="text" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan Wali">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Hubungan Wali :</label>
                        <input type="text" name="status_wali" class="form-control" placeholder="Hubungan Wali dengan Murid">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>No. Telp/Hp :</label>
                        <input type="text" name="kontak_wali" class="form-control" placeholder="Masukan Nomor">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Alamat :</label>
                        <textarea class="form-control" name="alamat_wali" rows="2" id="alamat_orangtua"></textarea>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Kode Pos :</label>
                        <input type="text" name="kode_pos_wali" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm">
                    <div class="form-group">
                        <label>Kecamatan :</label>
                        <input type="text" name="kecamatan_wali" class="form-control" placeholder="Kecamatan">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Kabupaten/Kota :</label>
                        <input type="text" name="kabupaten_wali" class="form-control" placeholder="Kabupaten/Kota">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Provinsi :</label>
                        <input type="text" name="provinsi_wali" class="form-control" placeholder="Provinsi">
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="alert alert-success">
                        <h6>Silahkan Ceklist Berikut :</h6>
                    <strong>
                        <input type="checkbox" name="pernyataan1" value="pernyataan1">
                        Saya menyatakan bahwa data yang saya isi diatas telah sesuai dan benar.
                        <br>
                        <input type="checkbox" name="pernyataan2" value="pernyataan2">
                        Saya bersedia menerima sanksi apabila melakukan pembatalan setelah berhasil mengirim formulir diatas.
                    </strong>
                </div>
            </div>
            
            <div class="row pt-3">
                <center>
                    <button type="submit" name="submit" class="btn btn-daftar">Daftar</button>
                    <button type="reset" name="reset" class="btn btn-reset">Kosongkan Kembali Formulir</button>
                </center>
            </div>
        </form>
        {{-- END INPUT DATA ORANG TUA / WALI --}}

    </div>
</section>

@include('layout/footer')
@endsection