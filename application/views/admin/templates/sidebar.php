<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(''); ?>">
    <div class="sidebar-brand-icon">
      <img src="<?= base_url('assets/img/'); ?>logo/logo.png" width="45" alt="">
    </div>
    <div class="sidebar-brand-text mx-3 text-left">UKM EXPO Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?= $title == 'Dashboard' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url('admin'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(''); ?>">
      <i class="fas fa-fw fa-home"></i>
      <span>Main Page</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Shorten Link -->
  <div class="sidebar-heading">
    Shorten Link
  </div>

  <li class="nav-item <?= $title == 'Buat Shorten Link' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url('shorten/create'); ?>">
      <i class="fas fa-fw fa-link"></i>
      <span>Buat Link</span>
    </a>
  </li>

  <li class="nav-item <?= $title == 'Daftar Shorten Link' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url('shorten/list'); ?>">
      <i class="fas fa-fw fa-list-ul"></i>
      <span>Daftar Link</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Virtual Expo -->
  <div class="sidebar-heading">
    Virtual Expo
  </div>

  <li class="nav-item <?= $title == 'Pengunjung Mahasiswa' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url('virtualexpo/guest?type=Mahasiswa'); ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Pengunjung Mahasiswa</span>
    </a>
  </li>
  <li class="nav-item <?= $title == 'Pengunjung Umum' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url('virtualexpo/guest?type=Umum'); ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Pengunjung Umum</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->