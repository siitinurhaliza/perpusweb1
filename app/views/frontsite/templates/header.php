<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <!-- Tambahkan kelas text-center di sini -->
       
    <a href="<?= BASEURL; ?>/frontsite/home" class="logo me-auto me-lg-0">
      <img src="<?= BASEURL; ?>/assets/frontsite/img/LOGO SMP PGRI.png" alt="SMP PGRI Logo">
      Smp Pgri
    </a>
    
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a href="<?= BASEURL; ?>/frontsite/home"><strong>Home</strong></a></li>
        <li><a href="<?= BASEURL; ?>/frontsite/profil"><strong>Profil Pustaka</strong></a></li>
        <li><a href="<?= BASEURL; ?>/frontsite/katalog"><strong>Katalog</strong></a></li>
        <li><a href="<?= BASEURL; ?>/frontsite/contact"><strong>Contact</strong></a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="header-social-links">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      <a class="bi bi-person-circle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?= BASEURL; ?>/frontsite/login">LOGIN</a></li>
        </ul>
      </li>
    </div>
  </div>
</header><!-- End Header -->
