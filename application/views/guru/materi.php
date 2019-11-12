<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BeSmart</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>vendors/select2/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/admin/'); ?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:<?= base_url('assets/admin/'); ?>partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('assets/admin/'); ?>index.html"><img src="<?= base_url('assets/admin/'); ?>images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Profile
              </a>
              <a class="dropdown-item preview-item nav-link" href="<?= base_url('assets/admin/'); ?>../index.html">
                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:<?= base_url('assets/admin/'); ?>partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="<?= base_url('assets/admin/'); ?>images/faces/siswa.png">
          </div>
          <div class="user-designation">
              Guru
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('assets/admin/'); ?>index_guru.html">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('assets/admin/'); ?>pages/materi/materi_guru.html">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Materi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('assets/admin/'); ?>pages/materi/latihan_guru.html">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Latihan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('assets/admin/'); ?>pages/video/video_guru.html">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Video</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('assets/admin/'); ?>pages/pesan/pesan_guru.html">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Pesan</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h2>Materi</h2>
                      <div class="row">
                        <div class="col-lg-12">
                          <table class="table table-bordered mt-5">
                            <h4 class="pt-2">
                              <a href="">[+] Tambah Materi</a>
                            </h4>
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Mapel</th>
                                <th scope="col">Materi</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; 
                                foreach ($materi as $m ) : 
                                ?>
                                  <tr>  
                              <td><?= $i ?></td>
                              <td><?= $m['mapel'] ?></td>
                              <td><?= $m['materi'] ?></td>
                              <td><?= $m['keterangan'] ?></td>
                              <td> <a href="">Edit </a>| <a href="">Hapus</a></td>
                                </tr>
                                <?php $i++; 
                                endforeach 
                                ?>
                            </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
            </div>
          </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:<?= base_url('assets/admin/'); ?>partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.templatewatch.com/" target="_blank" class="text-muted">BeSmart</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?= base_url('assets/admin/'); ?>vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/admin/'); ?>js/off-canvas.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?= base_url('assets/admin/'); ?>vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('assets/admin/'); ?>js/file-upload.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>js/typeahead.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
