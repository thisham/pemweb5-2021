<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Perangkat - SiTAPE</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>

<body>
  <header class="fixed-top shadow">
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
      <div class="container navbar-collapse">
        <a class="navbar-brand text-white" href="<?= base_url() ?>"><b>SiTAPE</b></a>
        <a class="navbar-brand text-white btn btn-outline-light active" href="<?= base_url('devices') ?>">Semua Device</a>
      </div>
    </nav>
  </header>

  <main>
    <h1 class="subpage-title container">Semua Device</h1>

    <!-- Cards -->
    <div class="container d-flex phone-container justify-content-center">
      <?php foreach ($devices as $device): ?>
        <!-- Device Card -->
        <div class="card phone-item-card">
          <img src="<?= $device->url_gambar ?>" class="card-img-top">
          <div class="card-body">
            <div style="display: flex; justify-content:space-between">
              <div>
                <h5 class="card-title"><?= $device->nama ?></h5>
                <div>Rp. <?= $device->harga ?></div>
              </div>
              <div>
                <?php if ($device->status): ?>
                  <div class="badge bg-primary">Tersedia</div>
                <?php else: ?>
                  <div class="badge bg-primary">Tak Tersedia</div>
                <?php endif ?>
              </div>
            </div>
            <p class="card-text"><?= $device->deskripsi ?></p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deviceDetail" onclick="triggerDetailModal(<?= $device->id_device ?>)">Lihat Detail</button>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="deviceDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Detail Perangkat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div style="display: flex">
              <img id="device-image" style="max-width: 250px;">
              <div>
                <h4 id="device-name"></h4>
                <b>Harga Sewa: </b><span id="device-rental-rate"></span> 
                <div id="availability"></div>
                <br />
                <p id="description"></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="https://wa.me/628888888888" type="button" class="btn btn-primary">Hubungi Admin</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>
    function triggerDetailModal(deviceData) {
      fetch("<?= base_url('devices/detail/') ?>" + deviceData)
        .then((res) => res.json())
        .then((data) => {
          document.getElementById('device-image').setAttribute('src', data.url_gambar);
          document.getElementById('device-name').innerText = data.nama;
          document.getElementById('device-rental-rate').innerText = data.harga;
          document.getElementById('availability').innerHTML = data.status 
            ? '<div class="badge bg-primary">Tersedia</div>'
            : '<div class="badge bg-danger">Tak Tersedia</div>';
          document.getElementById('description').innerHTML = data.deskripsi;
        });
    }
  </script>

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