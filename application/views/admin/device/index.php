<?php $this->load->view('template/meta') ?>
<?php
$columns = ["ID", "Nama Perangkat", "Harga (per hari)", "Status", "Aksi"];
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
            <h3 class="card-title">Daftar Perangkat</h3>
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
                <?php foreach ($device_list as $device) : ?>
                  <tr class="device-<?= $device->id_device ?>" data-device-id="<?= $device->id_device ?>" data-device-description="<?= $device->deskripsi ?>" data-device-image-url="<?= $device->url_gambar ?>" data-device-name="<?= $device->nama ?>" data-device-price="<?= $device->harga ?>" data-device-status="<?= $device->status ?>">
                    <td><?= $device->id_device ?></td>
                    <td><?= $device->nama ?></td>
                    <td><?= $device->harga ?></td>
                    <td><?= device_status_to_string($device->status) ?></td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary edit-button" data-toggle="modal" data-target="#modal-lg" data-id-device="<?= $device->id_device ?>">Edit</button>
                      <button type="button" class="btn btn-block btn-danger delete-button" data-id-device="<?= $device->id_device ?>">Hapus</button>
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

  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Large Modal</h4>
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
        window.location = `<?= base_url("admin/perangkat/delete/") ?>${deviceID}`;
      }
    })
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
    $('#edit--device-description').summernote('insertText', deviceDescription);
    $('#edit--device-status').val(deviceStatus);
  });

  $('.edit--save').click(() => {

  });
</script>
</body>

</html>