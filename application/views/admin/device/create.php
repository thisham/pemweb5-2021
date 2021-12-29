<?php $this->load->view('template/meta') ?>
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('template/navbar') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('template/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view('template/content_header') ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form id="edit--form" action="<?= base_url("admin/perangkat/new") ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <input name="device_id" type="hidden" class="form-control" id="edit--device-id">
            </div>
            <div class="form-group">
              <label for="edit--device-name">Nama Perangkat</label>
              <input type="text" name="name" class="form-control" id="edit--device-name" placeholder="Tuliskan nama perangkat">
            </div>
            <div class="form-group">
              <label for="edit--device-price">Harga per Hari</label>
              <input type="text" name="price" class="form-control" id="edit--device-price" placeholder="10000">
            </div>
            <div class="form-group">
              <label for="edit--device-image-url">URL Gambar</label>
              <input type="text" name="image_url" class="form-control" id="edit--device-image-url" placeholder="https://xxxxxxxx">
            </div>
            <div class="form-group">
              <label for="edit--device-description">Deskripsi</label>
              <textarea name="description" class="form-control" id="edit--device-description" style="height: 300px"></textarea>
            </div>
            <div class="form-group">
              <label for="edit--device-status">Status Perangkat</label>
              <input type="number" name="status" class="form-control" id="edit--device-status" placeholder="Status Perangkat">
              <small class="form-text text-muted">0 = Tersedia, 1 = Dipinjam, 2 = Dalam Perbaikan</small>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <input type="submit" class="btn btn-primary btn-lg edit--save" value="Simpan">
          </div>
        </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('template/footer') ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('template/js') ?>
<script>
  $('#edit--device-description').summernote();
</script>
</body>

</html>