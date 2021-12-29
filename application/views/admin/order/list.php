<?php $this->load->view('template/meta') ?>
<?php
$columns = ["ID", "Perangkat yang disewa", "Harga (per hari)", "Batas Peminjaman", "Status", "Aksi"];
?>
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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Order</h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <?php foreach ($columns as $col) : ?>
                    <th><?= $col ?></th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($order_list as $order) : ?>
                  <tr class="order-<?= $order->order_id ?>" data-order-device-id="<?= $order->id_device ?>" data-order-start-date="<?= $order->tanggal_sewa ?>" data-order-due-date="<?= $order->tanggal_kembali ?>" data-order-price="<?= $order->harga_order ?>" data-order-status="<?= $order->status_order ?>" data-order-borrower-id="<?= $order->nik_penyewa ?>">
                    <td><?= $order->order_id ?></td>
                    <td><?= $order->nama_device ?></td>
                    <td><?= $order->harga_order ?></td>
                    <td><?= $order->tanggal_kembali ?></td>
                    <td><?= order_status_to_string($order->status_order) ?></td>
                    <td>
                      <button type="button" class="btn btn-block btn-info view-button" data-toggle="modal" data-target="#view-modal" data-id-device="<?= $order->order_id ?>">Lihat</button>
                      <button type="button" class="btn btn-block btn-primary edit-button" data-toggle="modal" data-target="#edit-modal" data-id-device="<?= $order->order_id ?>">Edit</button>
                      <button type="button" class="btn btn-block btn-danger delete-button" data-id-device="<?= $order->order_id ?>">Hapus</button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal view-modal fade" id="view-modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Order</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <p><strong>Nama Perangkat:</strong> <span id="view--device-name"></span></p>
          </div>
          <div class="form-group">
            <p style="margin-bottom: 0"><strong>Status Perangkat:</strong> <span id="view--device-status"></span></p>
            <small class="form-text text-muted">0 = Tersedia, 1 = Dipinjam, 2 = Dalam Perbaikan</small>
          </div>
          <div class="form-group">
            <p><strong>Harga per Hari:</strong> Rp<span id="view--device-price"></span></p>
          </div>
          <div class="form-group">
            <label for="view--device-image">Gambar</label>
            <img id="view--device-image" width="300" style="display: block;" />
          </div>
          <div class="form-group">
            <label for="view--device-description">Deskripsi</label>
            <p id="view--device-description" style="border-radius: 8px; border: 1px solid gray; padding: 10px;"></p>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="edit-modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Perangkat</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="edit--form" action="<?= base_url("admin/perangkat/update/") ?>" method="POST">
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
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <input type="submit" class="btn btn-primary edit--save" value="Simpan">
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <?php $this->load->view('template/footer') ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('template/js') ?>
<script>
  $('#edit--device-description').summernote();
  $('.delete-button').click((event) => {
    const deviceID = event.target.getAttribute("data-id-device");
    Swal.fire({
      icon: 'error',
      title: 'Apakah Anda yakin ingin menghapus perangkat ini?',
      showCancelButton: true,
      confirmButtonText: "Ya",
      cancelButtonText: "Tidak"
    }).then((value) => {
      if (value.isCancelled) return;
      if (value.isConfirmed) {
        window.location = `<?= base_url("admin/order/delete/") ?>${deviceID}`;
      }
    })
  });

  $('.view-button').click((event) => {
    const deviceID = event.target.getAttribute("data-id-device");
    const selectedRow = $(`.device-${deviceID}`);
    const deviceName = selectedRow.attr("data-device-name");
    const devicePrice = selectedRow.attr("data-device-price");
    const deviceDescription = selectedRow.attr("data-device-description");
    const deviceStatus = selectedRow.attr("data-device-status");
    const deviceImageUrl = selectedRow.attr("data-device-image-url");
    $('#view--device-name').text(deviceName);
    $('#view--device-price').text(devicePrice);
    $('#view--device-description').html(deviceDescription);
    $('#view--device-status').text(deviceStatus);
    $('#view--device-image').attr('src', deviceImageUrl);
  });

  $('.edit-button').click((event) => {
    const deviceID = event.target.getAttribute("data-id-device");
    const selectedRow = $(`.device-${deviceID}`);
    const deviceName = selectedRow.attr("data-device-name");
    const devicePrice = selectedRow.attr("data-device-price");
    const deviceDescription = selectedRow.attr("data-device-description");
    const deviceStatus = selectedRow.attr("data-device-status");
    $('#edit--form').attr("action", `<?= base_url("admin/perangkat/update/") ?>${deviceID}`);
    $('#edit--device-id').val(deviceID);
    $('#edit--device-name').val(deviceName);
    $('#edit--device-price').val(devicePrice);
    $('#edit--device-description').summernote('pasteHTML', deviceDescription);
    $('#edit--device-status').val(deviceStatus);
  });
</script>
</body>

</html>