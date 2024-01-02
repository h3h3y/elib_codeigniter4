<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/style.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">E-Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#tentang">TENTANG</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#contact">CONTACT US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('/login') ?>">LOGIN</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- End Navbar -->

    <!-- slide -->
    <div id="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('assets'); ?>/image/library.jpg" class="d-block carousel-image" alt="image">
            <div class="carousel-caption">
              <h5>Sistem Informasi Perpustakaan</h5>
              <p>Di STMIK Widya Pratama</p>
              <p><a href="#home" class="btn btn-success rounded-pill">Home</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets'); ?>/image/library.jpg" class="d-block carousel-image" alt="image">
            <div class="carousel-caption">
              <h5>Sistem Informasi Perpustakaan</h5>
              <p>Di STMIK Widya Pratama</p>
              <p><a href="#tentang" class="btn btn-success rounded-pill">Tentang</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets'); ?>/image/library.jpg" class="d-block carousel-image" alt="image">
            <div class="carousel-caption">
              <h5>Sistem Informasi Perpustakaan</h5>
              <p>Di STMIK Widya Pratama</p>
              <p><a href="#contact" class="btn btn-success rounded-pill">Contact</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- akhir slide -->

    <!-- tentang kami -->
    <div class="container" id="tentang">
        <div class="box-tentang">
            <h1 class="text-center mb-5">TENTANG KAMI</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt accusantium corrupti minima, ea consectetur deserunt porro laudantium mollitia error repellat culpa saepe quaerat expedita assumenda possimus. Quaerat enim eius maxime.</p>
        </div>
    </div>
    <!-- akhir tentang kami -->

    <!-- contact -->
    <div class="container" id="contact">
        <div class="box-contact">
            <h1 class="text-center mb-5">CONTACT US</h1>
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-3x text-success mb-2"></i>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Address</h6>
                            <p class="card-text">Jl. Patriot No.25, Dukuh, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51146</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fas fa-phone-alt fa-3x text-success mb-2"></i>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Phone Number</h6>
                            <p class="card-text">0285427816</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fas fa-envelope fa-3x text-success mb-2"></i>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Email</h6>
                            <p class="card-text">akademik@stmik-wp.ac.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir contact -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>