<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
  <!-- Brand Logo -->
  <a href="<?= BASEURL; ?>/assets/backsite/index3.html" class="brand-link">
    <img src="<?= BASEURL; ?>/assets/backsite/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Perpustakaan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    

    <!-- Sidebar Menu -->
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Dashboard </p>
          </a>
        </li>
        <li class="nav-header">Master Data</li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/buku" class="nav-link">
            <i class="nav-icon fas fa-address-card"></i>
            <p> Data Buku </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/kategori" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p> Kategori Buku </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/penerbit" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>Impresum Buku</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/rak" class="nav-link">
            <i class="nav-icon fas fa-certificate"></i>
            <p>Rak Buku </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/anggota" class="nav-link">
            <i class="nav-icon fas fa-signature"></i>
            <p> Data Anggota </p>
          </a>
        </li>
        <li class="nav-header">Data Transaksi</li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/peminjaman" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p>Peminjaman Buku </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/pengembalian" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p>  Pengembalian Buku </p>
          </a>
        </li>
        <li class="nav-header">Laporan</li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/laporanpinjam" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p> Laporan Peminjaman </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/laporankembali" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p> Laporan Pengembalian </p>
          </a>
        </li>
        <li class="nav-header">User</li>
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/backsite/pengguna" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Pengguna</p>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>