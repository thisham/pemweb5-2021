<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/template/backend/dist') ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url("admin/dashboard") ?>" class="nav-link <?php echo str_contains(uri_string(), 'admin/dashboard') ? "active" : NULL ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item <?php echo str_contains(uri_string(), 'admin/order') ? "menu-open" : NULL ?>">
          <a href="<?= base_url("admin/order") ?>" class="nav-link <?php echo str_contains(uri_string(), 'admin/order') ? "active" : NULL ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>Order</p>
            <i class="fas fa-angle-left right"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/order/list') ?>" class="nav-link <?php echo str_contains(uri_string(), 'admin/order/list') ? "active" : NULL ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Order</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/order/new') ?>" class="nav-link <?php echo str_contains(uri_string(), 'admin/order/new') ? "active" : NULL ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Order Baru</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item <?php echo str_contains(uri_string(), 'admin/perangkat') ? "menu-open" : NULL ?>">
          <a href="<?= base_url("admin/perangkat") ?>" class="nav-link <?php echo str_contains(uri_string(), 'admin/perangkat') ? "active" : NULL ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>Perangkat</p>
            <i class="fas fa-angle-left right"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/perangkat/list') ?>" class="nav-link <?php echo str_contains(uri_string(), 'admin/perangkat/list') ? "active" : NULL ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Perangkat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/perangkat/new') ?>" class="nav-link <?php echo str_contains(uri_string(), 'admin/perangkat/new') ? "active" : NULL ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Perangkat Baru</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>