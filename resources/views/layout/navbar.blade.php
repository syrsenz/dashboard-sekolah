<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    {{-- CSS File --}}
    
    {{-- Bootstrap V.5 ---> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/style.css">
    
    {{-- FontAwesome ---> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- Responsive Navbar --}}
{{-- <link rel="stylesheet" href="css/navbar.css"> --}}


</head>
<body>

    {{-- Navbar --}}

    <nav class="navbar navbar-expand-lg navbar-light position-fixed">
      <div class="container">
        <a class="navbar-brand">
          <img src="/assets/logo.png" alt="logo" width="50" class="d-inline-block me-3">SMA Negeri 1 Muntilan
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="/">BERANDA</a>
            </li>
            <li class="nav-item dropdown mx-2">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown" href="/profile" >PROFIL</a>
              <ul class="dropdown-menu mt-3" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="profile/visimisi" >Visi & Misi</a></li>
                <li><a class="dropdown-item" href="profile/sejarah" >Sejarah</a></li>
                <li><a class="dropdown-item" href="profile/fasilitas" >Fasilitas</a></li>
                <li><a class="dropdown-item" href="profile/gurukaryawan" >Guru & Karyawan</a></li>
              </ul>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="/berita">BERITA</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="/prestasi">PRESTASI</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="/galeri">GALERI</a>
            </li>
          </ul>
          <div>
            <button class="button-primary" href="/kontak">KONTAK
            </button>
          </div>
        </div>
      </div>
    </nav>




  {{-- Navbar --}}

  {{-- <nav class="navbar navbar-expand-lg navbar-light position-fixed">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/assets/logo.png" alt="logo" width="50" class="d-inline-block me-3">SMA Negeri 1 Muntilan
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center align-items-center" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="/">BERANDA</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="/profile">PROFIL</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="/berita">BERITA</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="/prestasi">PRESTASI</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="/galeri">GALERI</a>
          </li>
        </ul>
        <div>
          <button class="button-primary" href="/kontak">KONTAK
          </button>
        </div>
      </div>
    </div>
  </nav> --}}

{{-- <div style="background-color:   #a9cff5">
  <div class="container" style="background-color:   #a9cff5">
      <nav class="navbar navbar-expand-lg col-12" style="background-color:   #a9cff5">
          <div class="container-fluid col-12">
            <a class="navbar-brand" href="#">
              <img src="/assets/logo.png" alt="">
            </a>
            <div class="fs-5">
              SMA Negeri 1 Muntilan
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5 ps-5" id="navbarNav">
              <ul class="navbar-nav d-flex col-12">
                <li class="nav-item p-2 align-items-center row">
                  <a class="" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item p-2 align-items-center row">
                  <a class="" href="/profile">Profile</a>
                </li>
                <li class="nav-item p-2 align-items-center row">
                  <a class="" href="/berita">Berita</a>
                </li>
                <li class="nav-item p-2 align-items-center row">
                  <a class="" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item p-2 align-items-center row">
                  <a class="" href="/prestasi">Prestasi</a>
                </li>
                <li class="nav-item p-2 align-items-center row me-5 pe-5">
                  <a class="" href="#">Bahasa</a>
                </li>
                <li class="nav-item p-2 align-items-center row">
                  <div class="homepage__navbar-sign col-1">
                      <button type="button">
                        <a href="#kontak">KONTAK</a>
                      </button>
                    </div>
                </li>
              </ul>
            </div>
          </div>
      </nav> 
  </div>
</div> --}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

@yield('body')

</body>
</html>