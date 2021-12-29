<?php $this->load->view('template/meta') ?>
<?php
$columns = ["ID", "NIK Penyewa", "Perangkat yang disewa", "Total Biaya", "Tanggal Peminjaman", "Batas Peminjaman", "Status", "Aksi"];
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
                  <tr class="order-<?= $order->order_id ?>" data-order-nik-penyewa="<?= $order->nik_penyewa ?>" data-order-id="<?= $order->order_id ?>" data-order-device-id="<?= $order->id_device ?>" data-order-start-date="<?= $order->tanggal_sewa ?>" data-order-return-date="<?= $order->tanggal_kembali ?>" data-order-price="<?= $order->harga_order ?>" data-order-status="<?= $order->status_order ?>" data-order-borrower-id="<?= $order->nik_penyewa ?>">
                    <td><?= $order->order_id ?></td>
                    <td><?= $order->nik_penyewa ?></td>
                    <td><?= $order->nama_device ?></td>
                    <td><?= $order->harga_order ?></td>
                    <td><?= $order->tanggal_sewa ?></td>
                    <td><?= $order->tanggal_kembali ?></td>
                    <td><?= order_status_to_string($order->status_order) ?></td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary edit-button" data-toggle="modal" data-target="#edit-modal" data-order-id="<?= $order->order_id ?>">Edit</button>
                      <button type="button" class="btn btn-block btn-danger delete-button" data-order-id="<?= $order->order_id ?>">Hapus</button>
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

  <div class="modal fade" id="edit-modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Order</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="edit--form" action="<?= base_url("admin/order/update/") ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="edit--order-borrower-id">NIK Penyewa</label>
              <input type="text" name="borrower_id" class="form-control" id="edit--order-borrower-id" placeholder="351xxxxxxx">
            </div>
            <div class="form-group">
              <label for="edit--device-name">Perangkat yang Disewa</label>
              <select name="id_device" id="edit--device-name" class="form-control">
                <option value="" disabled>Pilih perangkat</option>
                <?php foreach ($device_list as $device) : ?>
                  <option class="edit--device-option" value="<?= $device->id_device ?>"><?= $device->nama ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="edit--order-price">Total Biaya</label>
              <input type="text" name="price" class="form-control" id="edit--order-price" placeholder="10000">
            </div>
            <div class="form-group">
              <label for="edit--order-start-date">Tanggal Penyewaan</label>
              <input class="form-control" type="datetime-local" name="start_date" id="edit--order-start-date">
            </div>
            <div class="form-group">
              <label for="edit--order-return-date">Tanggal Pengembalian</label>
              <input class="form-control" type="datetime-local" name="return_date" id="edit--order-return-date">
            </div>
            <div class="form-group">
              <label for="edit--device-status">Status</label>
              <select name="status" id="" class="form-control">
                <option class="edit--status-option" value="0">Masih Dipinjam</option>
                <option class="edit--status-option" value="1">Selesai</option>
                <option class="edit--status-option" value="2">Belum Kembali Tanpa Alasan yang Jelas</option>
              </select>
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
  $('.delete-button').click((event) => {
    const orderID = event.target.getAttribute("data-order-id");
    Swal.fire({
      icon: 'error',
      title: 'Apakah Anda yakin ingin menghapus perangkat ini?',
      showCancelButton: true,
      confirmButtonText: "Ya",
      cancelButtonText: "Tidak"
    }).then((value) => {
      if (value.isCancelled) return;
      if (value.isConfirmed) {
        window.location = `<?= base_url("admin/order/delete/") ?>${orderID}`;
      }
    })
  });

  $('.edit-button').click((event) => {
    const orderID = event.target.getAttribute("data-order-id");
    console.log("target", event.target);
    const selectedRow = $(`.order-${orderID}`);
    const borrowerID = selectedRow.attr("data-order-nik-penyewa");
    const deviceID = selectedRow.attr("data-order-device-id");
    const orderStatus = selectedRow.attr("data-order-status");
    const deviceName = selectedRow.attr("data-device-name");
    const orderPrice = selectedRow.attr("data-order-price");
    const orderStartDate = selectedRow.attr("data-order-start-date");
    const orderReturnDate = selectedRow.attr("data-order-return-date");
    console.log("start date", orderStartDate)

    $('#edit--form').attr("action", `<?= base_url("admin/order/update/") ?>${orderID}`);
    $('#edit--order-borrower-id').val(borrowerID);
    $('#edit--order-price').val(orderPrice);
    $('#edit--order-start-date').val(orderStartDate.replace(" ", "T").slice(0, orderStartDate.length - 3));
    $('#edit--order-return-date').val(orderReturnDate.replace(" ", "T").slice(0, orderReturnDate.length - 3));

    $('.edit--device-option').each(function() {
      if ($(this).attr('value') === deviceID) {
        $(this).attr('selected', 'selected');
      }
    });

    $('.edit--status-option').each(function() {
      if ($(this).attr('value') === orderStatus) {
        $(this).attr('selected', 'selected');
      }
    });
  });
</script>
</body>

</html>