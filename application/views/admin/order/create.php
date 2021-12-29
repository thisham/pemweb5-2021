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
        <form id="edit--form" action="<?= base_url("admin/order/new") ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <input name="device_id" type="hidden" class="form-control" id="edit--device-id">
            </div>
            <div class="form-group">
              <label for="edit--borrower-id">NIK Penyewa</label>
              <input type="text" name="borrower_id" class="form-control" id="edit--borrower-id" placeholder="351xxxxxxx">
            </div>
            <div class="form-group">
              <label for="edit--device-name">Perangkat yang Disewa</label>
              <select name="id_device" id="edit--device-name" class="form-control">
                <option value="" disabled>Pilih perangkat</option>
                <?php foreach ($device_list as $device) : ?>
                  <option value="<?= $device->id_device ?>"><?= $device->nama . " (Rp $device->harga per hari)" ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="edit--device-price">Harga</label>
              <input type="text" name="price" class="form-control" id="edit--device-price" placeholder="10000">
            </div>
            <div class="form-group">
              <label for="edit--order-start-date">Tanggal Penyewaan</label>
              <input class="form-control" type="datetime-local" name="start_date" id="edit--order-start-date">
            </div>
            <div class="form-group">
              <label for="edit--device-description">Tanggal Pengembalian</label>
              <input class="form-control" type="datetime-local" name="return_date" id="edit--return-date">
            </div>
            <div class="form-group">
              <label for="edit--device-status">Status</label>
              <select name="status" id="" class="form-control">
                <option value="0">Masih Dipinjam</option>
                <option value="1">Selesai</option>
                <option value="2">Belum Kembali Tanpa Alasan yang Jelas</option>
              </select>
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
</body>

</html>