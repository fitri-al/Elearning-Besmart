<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>landing/css/register2.css">
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
<br>
<br>
<br>
<br>

<!-- Mendaftar -->
<section id="mendaftar" class="mendaftar">
  <div class="container">
  <div class="row">
    <div class="col text-center pt-4 mb-4">
      <h2>Mendaftar</h2>
    </div>
  </div>
  <div class="row mb-5 justify-content-center">
    <div class="col-lg-4">
      <div class="card text-white bg-info mb-3 text-center">
        <div class="card-body">
          <h5 class="card-title">Daftarkan diri Anda !</h5>
          <p class="card-text">Belajar Mudah, Murah, Nyaman dan Berkualitas.</p>
        </div>
      </div>
      <ul class="list-group">
        <li class="list-group-item">Our Office</li>
        <li class="list-group-item">Jl.Sekaran Gunung Pati Semarang</li>
        <li class="list-group-item">BeSmart@gmail.com</li>
        <li class="list-group-item">Central Java, Indonesia</li>
      </ul>
    </div>

    <div class="col-lg-6">
      <form method="post" action="<?=base_url('page/registerguru')?>">
        <div class="form-row pb-3">
          <div class="col">
            <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
            <div class="form-control-feedback text-danger"> <?= form_error('nama')?>   </div>
          </div>
        </div>
        <div class="form-group">
            <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="email@mail.com">
            <div class="form-control-feedback text-danger"> <?= form_error('email')?>   </div>
          </div>
          <div class="form-group">
            <input name="username" type="text" class="form-control" id="formGroupExampleInput4" placeholder="username">
            <div class="form-control-feedback text-danger"> <?= form_error('username')?>   </div>
          </div>
          <div class="form-group">
            <input name="nomorhp" type="text" class="form-control" id="formGroupExampleInput4" placeholder="Nomor handphone">
            <div class="form-control-feedback text-danger"> <?= form_error('nomorhp')?></div>
          </div>
          <div class="form-group">
            <input name="password1" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
            <div class="form-control-feedback text-danger"> <?= form_error('password1')?>   </div>
          </div>
          <div class="form-grup pb-3">
            <input name="password2" type="password" class="form-control" id="formGroupExampleInput3" placeholder="Konfirmasi Password">
          </div>
          <div class="custom-control custom-switch pt-3 pb-3">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Saya setuju</label>
          </div>
          <button class="btn btn-info btn-block" type="submit">Daftar</button>
      </form>
    </div>
  </div>
  </div>
</section>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>