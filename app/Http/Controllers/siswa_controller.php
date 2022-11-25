<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\siswa;
use Barryvdh\DomPDF\Facade\Pdf;

class siswa_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/siswa',[
            'siswa'=> siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=>['required'],
            'asal_sekolah'=>['required'],
            'tempat_lahir'=>['required'],
            'tanggal_lahir'=>['required'],
            'nisn'=>['required'],
            'jenis_kelamin'=>['required'],
            'tahun_lulus'=>['required'],
            'email'=>['required'],
            'nilai_rata'=>['required'],
            'kontak_siswa'=>['required'],
    
            'nama_ayah'=>['required'],
            'pekerjaan_ayah'=>['required'],
            'tempat_lahir_ayah'=>['required'],
            'tanggal_lahir_ayah'=>['required'],
            'kontak_ayah'=>['required'],
    
            'nama_ibu'=>['required'],
            'pekerjaan_ibu'=>['required'],
            'tempat_lahir_ibu'=>['required'],
            'tanggal_lahir_ibu'=>['required'],
            'kontak_ibu'=>['required'],
    
            'alamat_orangtua'=>['required'],
            'kode_pos'=>['required'],
            'kecamatan'=>['required'],
            'kabupaten'=>['required'],
            'provinsi'=>['required'],
    
            'nama_wali'=>[''],
            'pekerjaan_wali'=>[''],
            'status_wali'=>[''],
            'kontak_wali'=>[''],
            'alamat_wali'=>[''],
            'kode_pos_wali'=>[''],
            'kecamatan_wali'=>[''],
            'kabupaten_wali'=>[''],
            'provinsi_wali'=>[''],
    
            'pernyataan1'=>['required'],
            'pernyataan2'=>['required'],
        ]);
        siswa::create($validated);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          return view('admin/update_siswa',[
            'siswa'=>siswa::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama'=>['required'],
            'alamat'=>['required'],
            'kelas'=>['required'],
            'tahun_masuk'=>['required']
        ]);
        siswa::find($id)->update($validated);
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::find($id)->delete();
        return redirect('/siswa');
    }
    public function prosesRegistrasi(Request $request)   
     {
        $validated = $request->validate([
            'nama'=>['required'],
            'asal_sekolah'=>['required'],
            'tempat_lahir'=>['required'],
            'tanggal_lahir'=>['required'],
            'nisn'=>['required'],
            'jenis_kelamin'=>['required'],
            'tahun_lulus'=>['required'],
            'email'=>['required'],
            'nilai_rata'=>['required'],
            'kontak_siswa'=>['required'],
    
            'nama_ayah'=>['required'],
            'pekerjaan_ayah'=>['required'],
            'tempat_lahir_ayah'=>['required'],
            'tanggal_lahir_ayah'=>['required'],
            'kontak_ayah'=>['required'],
    
            'nama_ibu'=>['required'],
            'pekerjaan_ibu'=>['required'],
            'tempat_lahir_ibu'=>['required'],
            'tanggal_lahir_ibu'=>['required'],
            'kontak_ibu'=>['required'],
    
            'alamat_orangtua'=>['required'],
            'kode_pos'=>['required'],
            'kecamatan'=>['required'],
            'kabupaten'=>['required'],
            'provinsi'=>['required'],
    
            'nama_wali'=>[''],
            'pekerjaan_wali'=>[''],
            'status_wali'=>[''],
            'kontak_wali'=>[''],
            'alamat_wali'=>[''],
            'kode_pos_wali'=>[''],
            'kecamatan_wali'=>[''],
            'kabupaten_wali'=>[''],
            'provinsi_wali'=>[''],
    
            'pernyataan1'=>['required'],
            'pernyataan2'=>['required'],
        ]);
        siswa::create($validated);

        $pdf = Pdf::loadView('printPendaftaran' )->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('testing.pdf');
    
    }
}
