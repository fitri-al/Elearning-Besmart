<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>landing/css/opsi.css">
    <script src="https://kit.fontawesome.com/df9c46dc99.js" crossorigin="anonymous"></script>

    <title>BeSmart</title>
  </head>
<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand">
      <img src="<?= base_url('assets/landing/') ?>img/logo.png" alt="" height="50" width="50" alt="">
      Be-Smart 
    </a>
  </div>
  <div class="container">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav justify-content-right">
      <a class="nav-item nav-link active" href="index.html">Beranda <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Tentang BS</a>
      <a class="nav-item nav-link" href="#">Keunggulan</a>
      <a class="btn btn-outline-danger" href="login.html" role="button">Log In</a>
      <a class="btn btn-danger ml-3" href="opsi.html" role="button">Daftar</a>
    </div>
  </div>
  </div>
</nav>

<div class="container">
<div class="row mb-3">
  <div class="col-md col-centered">
    <div class="card" style="width: 250px">
      <div class="card-body">
        <h3 class="card-text text-center pb-3"><strong>Guru</strong></h3>
        <img src="<?= base_url('assets/landing/') ?>img/guru.png" class="card-img-top pb-3" alt="card image cap" style="width: 100px">
        <br>
        <a href="<?= base_url('page/registerguru') ?>" class="btn btn-info" role="button">Daftar</a>
      </div>
    </div>
  </div>
  <div class="col-md col-centered">
    <div class="card" style="width: 250px">
      <div class="card-body">
        <h3 class="card-text text-center pb-3"><strong>Siswa</strong></h3>
        <img src="<?= base_url('assets/landing/') ?>img/siswa.png" class="card-img-top pb-3" class=" mx-auto d-block" alt="card image cap" style="width: 100px">
        <br>
        <a href="<?= base_url('page/registerguru') ?>" class="btn btn-info" role="button">Daftar</a>
      </div>
    </div>
  </div>
</div>
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>