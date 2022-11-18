@extends('layout/navbar')
@section('body')
<div class="container pb-3 mt-3"><!--Container berita start-->
    <div class="row col-12 mb-4"><!--row berita start-->
      <div class="card border-bottom border-white" style="width: 25rem;">
        <img src="assets/berita.jpg" class="card-img-top" alt="...">
        <div class="card-body border-secondary border-bottom">
          <h5 class="card-title">Judul Prestasi</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="text-secondary">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg>
          </a>
        </div>
      </div>
      <div class="text-secondary mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <p class="d-inline">ADMIN</p>
      </div>
    </div>

    

  </div><!--row berita end-->
</div><!--Container berita end-->
@include('layout/footer')

@endsection