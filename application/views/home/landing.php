<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental HP - SiTAPE</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>

<body>
  <header class="fixed-top shadow">
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
      <div class="container navbar-collapse">
        <a class="navbar-brand text-white" href="<?= base_url() ?>"><b>SiTAPE</b></a>
        <a class="navbar-brand text-white btn btn-outline-light" href="<?= base_url('devices') ?>">Semua Device</a>
      </div>
    </nav>
  </header>

  <main>
    <!-- Jumbotron -->
    <div class="p-5 mb-4 bg-primary custom-jumbotron">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-white my-3">Sewa HP <br> Kini Lebih Mudah!</h1>
        <p class="col-md-8 fs-4 text-white">Dengan device yang lebih mumpuni, temukan pengalaman baru dengan device kami. <br> Aman, Terbaik dan Terpercaya!</p>
        <a href="<?= base_url('devices') ?>" class="btn btn-light btn-lg" type="button">Temukan Device!</a>
      </div>
    </div>

    <!-- Subheader -->
    <h2 class="subheader container">Device Tersedia</h2>

    <!-- Cards -->
    <div class="container d-flex phone-container justify-content-center">
      <?php foreach ($devices as $device): ?>
        <!-- Device Card -->
        <div class="card phone-item-card">
          <img src="<?= $device->url_gambar ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $device->nama ?></h5>
            <p class="card-text"><?= $device->deskripsi ?></p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <!-- Subheader -->
    <h2 class="subheader container">Temukan Kami</h2>

    <div class="container">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <!-- gmap -->
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=upn%20veteran%20jawa%20timur&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.whatismyip-address.com/divi-discount/"></a>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Universitas Pembangunan Nasional "Veteran" Jawa Timur</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-primary text-center text-white">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 
      <a class="text-white footer-url" href="https://github.com/thisham/pemweb5-2021">SiTAPE</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>
</html>