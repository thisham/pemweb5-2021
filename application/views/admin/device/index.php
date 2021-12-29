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
                  <tr>
                    <td><?= $device->id_device ?></td>
                    <td><?= $device->nama ?></td>
                    <td><?= $device->harga ?></td>
                    <td><?= device_status_to_string($device->status) ?></td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary">Edit</button>
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

  <?php $this->load->view('template/footer') ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('template/js') ?>
<script>
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
</script>
</body>

</html>