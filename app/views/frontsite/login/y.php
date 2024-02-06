<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
<main id="main">
       <!-- ======= Contact Section ======= -->
    <section id="login" class="login">
      <div class="container" data-aos="fade-up">

        <style>
        body {
            background-image: url("<?= BASEURL; ?>/assets/frontsite/img/buku1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
     <style>
        body {
            background-color: #f8f9fc;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 40px;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            max-width: 150px;
        }

        .form-heading {
            text-align: center;
        }
    </style>
</head>
<form role="form" action="<?= BASEURL; ?>/frontiste/login/login" method="POST">
<div class="card">
    <div class="card-body">
        <div class="logo">
            <img src="<?= BASEURL; ?>/assets/frontsite/img/LOGO SMP PGRI.png" alt="SMP PGRI Logo">
        </div>
        <div class="title">
          <h2>Welcome Perpustakaan</h2>
        </div>
        <form class="user">
            <div class="form-group">
                <input type="nama" class="form-control form-control-user" name="nama"  placeholder="Enter Username...">
            </div>

            <div class="form-group" style="margin-top: 10px;">
                <input type="password" class="form-control form-control-user"  name="password" placeholder="Enter Password...">
            </div>

            <div class="logo" style="margin-top: 10px;">
            <a href="<?= BASEURL; ?>/backsite/dashboard" class="btn btn-primary btn-user btn-block">
                Login
            </a>
  </div>
           
        </form>
    </div>
</div>

    </div>
</div>
      </div>
        </div>
    </div>

    </div>
    </section>
</main>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->