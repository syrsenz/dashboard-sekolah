@extends('layout/navbar')
@section('body')

{{-- Galeri Section --}}
<section id="galeri">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center title-galeri">
          <h2>Galeri</h2>
        </div>
      </div>
  
      <!--Container galeri start-->
      <div class="row mt-5">
        
        <!--row galeri start-->
        <div class="row row-cols-1 row-cols-md-3 g-6">
          <div class="col mb-4">
            <div class="card-galeri" >
              <div class="image-galeri">
                <img src="assets/berita.jpg" class="card-image"  alt="...">
              </div>
              <div class="card-body border-secondary border-bottom mb-2 py-3 px-2">
                <h5 class="card-title">Judul Galeri</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/" class="link-to">Selengkapnya...</a>
              </div>
              <div class="text-secondary mb-4 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                <p class="d-inline">ADMIN</p>
              </div>
            </div>
          </div>
        </div>
        <!--row galeri end-->
      </div>
    </div>
    <!--Container galeri end-->
    
  </section>



{{-- <div class="container pb-3 mt-3"><!--Container berita start-->
    <div class="row col-12 mb-4"><!--row berita start-->
        <div class="card border-bottom border-white" style="width: 25rem;">
            <img src="assets/berita.jpg" class="card-img-top" alt="...">
            <div class="text-center ">
                <p class="card-title">Judul Prestasi</p>
            </div>
        </div>
        <div class="card border-bottom border-white" style="width: 25rem;">
            <img src="assets/berita.jpg" class="card-img-top" alt="...">
            <div class="text-center ">
                <p class="card-title">Judul Prestasi</p>
            </div>
        </div>
        <div class="card border-bottom border-white" style="width: 25rem;">
            <img src="assets/berita.jpg" class="card-img-top" alt="...">
            <div class="text-center ">
                <p class="card-title">Judul Prestasi</p>
            </div>
        </div>
        <div class="card border-bottom border-white" style="width: 25rem;">
            <img src="assets/berita.jpg" class="card-img-top" alt="...">
            <div class="text-center ">
                <p class="card-title">Judul Prestasi</p>
            </div>
        </div>
        <div class="card border-bottom border-white" style="width: 25rem;">
            <img src="assets/berita.jpg" class="card-img-top" alt="...">
            <div class="text-center ">
                <p class="card-title">Judul Prestasi</p>
            </div>
        </div>

    </div><!--row berita end-->
</div><!--Container berita end--> --}}

@include('layout/footer')
@endsection