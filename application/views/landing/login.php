<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/login.css">
    <script src="https://kit.fontawesome.com/df9c46dc99.js" crossorigin="anonymous"></script>

    <title>BeSmart</title>
  </head>
<body style="background-image: url('<?= base_url('assets/') ?>landing/img/bg2-01.jpg'); background-size: cover;">
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand">
      <img src="img/logo.png" alt="" height="50" width="50" alt="">
      Be-Smart 
    </a>
  </div>
  <div class="container">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav justify-content-right">
      <a class="nav-item nav-link active" href="index.html">Beranda <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Tentang BS</a>
      <a class="nav-item nav-link" href="#">Keunggulan</a>
      <a class="btn btn-outline-danger" href="#" role="button">Log In</a>
      <a class="btn btn-danger ml-3" href="<?= base_url('page/opsi'); ?>" role="button">Daftar</a>
    </div>
  </div>
  </div>
</nav>

<!-- login Form -->
<div id="login">
    <h3 class="text-center text-white pt-5"></h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="<?=base_url('page/login')?>" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label name="username" for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                            <div class="form-control-feedback text-danger"> <?= form_error('username')?>   </div>
                        </div>
                        <div class="form-group">
                            <label name="password" for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                            <div class="form-control-feedback text-danger"> <?= form_error('password')?>   </div>
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="<?=base_url('page/opsi')?>" class="text-info">Register here</a>
                        </div>
                    </form>
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