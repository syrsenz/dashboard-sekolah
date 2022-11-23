@extends('layout/navbar')
@section('body')


<section id="ppdb" class="">
    <div class="container p-5 my-3 border bg-light">
        <h1 class="text-center">FORM PENDAFTARAN PESERTA DIDIK BARU</h1>
        <h4 class="text-center">MTs Ma'arif Nyatnyono</h4>
        <h4 class="text-center">Tahun Pelajaran 2022/2023</h4>

        {{-- INPUT DATA SISWA --}}
        <form method="POST" id="form">
            <div class="alert alert-secondary mt-5">
                <strong>DATA CALON PESERTA DIDIK</strong>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Lengkap :</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Asal Sekolah :</label>
                        <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>NISN :</label>
                        <input type="text" name="nisn" class="form-control" placeholder="NISN">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Jenis Kelamin :</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option>Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Tahun Lulus :</label>
                        <input type="text" name="tahun_lulus" class="form-control" placeholder="Tahun Lulus">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nilai Rata-Rata :</label>
                        <input type="text" name="nilai_rata" class="form-control" placeholder="Nilai Rata-Rata">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>No. Telp/Hp :</label>
                        <input type="text" name="kontak_siswa" class="form-control" placeholder="Masukan Nomor">
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
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Lengkap Ayah Kandung">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Pekerjaan :</label>
                        <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
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
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Lengkap Ibu Kandung">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Pekerjaan :</label>
                        <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>No. Telp/Hp :</label>
                        <input type="text" name="kontak_ibu" class="form-control" placeholder="Masukan Nomor">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Alamat :</label>
                        <textarea class="form-control" name="alamat_orangtua" rows="2" id="alamat_orangtua"></textarea>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Kode Pos :</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm">
                    <div class="form-group">
                        <label>Kecamatan :</label>
                        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Kabupaten/Kota :</label>
                        <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten/Kota">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Provinsi :</label>
                        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
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
                        <textarea class="form-control" name="alamat_orangtua" rows="2" id="alamat_orangtua"></textarea>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Kode Pos :</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm">
                    <div class="form-group">
                        <label>Kecamatan :</label>
                        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Kabupaten/Kota :</label>
                        <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten/Kota">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Provinsi :</label>
                        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
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