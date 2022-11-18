@extends('layout/navbar')
@section('body')

{{-- Hero Section --}}
<section id="hero">
  <div class="mask">
    <img src="/assets/gedung.jpg" alt="" class="img-hero">
    <div class="row h-100">
      <div class="hero-nametag my-auto">
        <div class="text-center text-white fs-3">{{$profile->nama_sekolah}}</div>
        <div class="text-center text-white">{{$profile->visi_sekolah}}</div>
      </div>
    </div>
  </div>
</section>

<div class="col-12 d-flex justify-content-center pt-5 pb-3" style="background-color: #1d4e89">
  <form action="" method="post" class="col-4" style="position: relative">
    <div class="input-icon col-12" style="position: relative">
      <input type="text" class="form-control rounded-5 p-2" placeholder="apa yang ingin anda cari ?">
      <button class="btn rounded-circle text-white " style="position: absolute; top:2px; right:3px;background-color:#dd6e42;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </div>
    <div class="text-center mt-2 mb-1">
      Pencarian Populer : penerimaan siswa baru
    </div>
  </form>
</div>


{{-- Berita Section --}}
<section id="berita">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center title-berita">
        <h2>Berita Terbaru</h2>
      </div>
    </div>

    <!--Container berita start-->
    <div class="row mt-5">
      
      <!--row berita start-->
      <div class="row row-cols-1 row-cols-md-3 g-6">
        @foreach ($berita as $berita)
        <div class="col mb-4">
          <div class="card-berita" >
            <div class="image-berita">
              <img src="/image/{{$berita->foto}}" class="card-image"  alt="...">
            </div>
            <div class="card-body border-secondary border-bottom mb-2 py-3 px-2">
              <h5 class="card-title">{{Str::limit($berita->judul, 30)}}</h5>
              <p class="card-text">{{  Str::limit(strip_tags($berita->body), 45)   }}</p>
              <a href="/{{$berita->slug}}" class="link-to">Selengkapnya...</a>
            </div>
            <div class="text-secondary mb-4 px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
              <p class="d-inline">{{$berita->user->name}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!--row berita end-->
    </div>
  </div>
  <!--Container berita end-->

  <div class="d-flex justify-content-center mt-5">
    <a href="/berita" class="btn-primary btn">Tampilkan Semua Berita</a>
  </div>
</section>
{{-- Berita Section End --}}


{{-- Prestasi Section --}}
<section id="prestasi">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center title-prestasi">
        <h2>Prestasi Terbaru</h2>
      </div>
    </div>

    <!--Container prestasi start-->
    <div class="row mt-5">

      <!--row berita start-->
      <div class="row">
        @foreach ($prestasi as $prestasi)
        <div class="card-prestasi mt-3" >
          <div class="row-prestasi row col-12 border-white border rounded-2" >
            <div class="col-md-4 p-2">
              <img src="/image/{{$prestasi->foto}}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8" style="position: relative">
              <h5 class="prestasi-title text-dark mt-2 mb-2">{{$prestasi->judul}}</h5>
              <div class="text-secondary border-bottom border-secondary py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                  <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                  <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                <p class="d-inline">{{$prestasi->created_at}}</p>
              </div>
              <p class="card-text">{{  Str::limit(strip_tags($prestasi->body), 45)}}</p>
              <a href="/{{$prestasi->slug}}" class="link-to" style="position: absolute; bottom:10px; right:10px">Selengkapnya...</a>
            </div> 
          </div>
        </div>
        @endforeach
      </div>
      <!--row berita end-->

    </div>
  </div>
  <!--Container prestasi end-->

  <div class="d-flex justify-content-center mt-5">
    <a href="/prestasi" class="btn-primary btn">Tampilkan Semua Prestasi</a>
  </div>
</section>
{{-- Prestasi Section End --}}


{{-- Galeri Section --}}
{{-- <section id="galeri">
  <div class="container">
    <div class="col-12 text-center title-galeri">
      <h2>Galeri</h2>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-5">
    <a href="/galeri" class="btn-primary btn">Tampilkan Semua Galeri</a>
  </div>
</section> --}}





@include('layout/footer')

@endsection