<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data penerbit</h3>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL; ?>/backsite/buku/search" method="post">
              <div class="row mb-3">
                <div class="col-lg-6">
                  <div class="input-group">
                    <input type="text" class="form-control"
                      placeholder="" name="key">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                      <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/backsite/buku">Reset</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Judul</th>
                  <th>Penerbit</th>
                  <th>Pengarang</th>
                  <th>Kota</th>
                  <th>Alamat</th>
                  <th>Tahun Terbit</th>
                  <th>Phone</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data['buku'] as $row) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['penerbit']; ?></td>
                    <td><?= $row['pengarang']; ?></td>
                    <td><?= $row['kota']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['tahunterbit']; ?></td>
                    <td><?= $row['tlp']; ?></td>
                    <td><?= $row['keterangan']; ?></td>
                  </tr>
                  <?php $no++;
                endforeach; ?>
              </tbody>
            </table>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Tambahkan skrip berikut di akhir file HTML Anda, tepat sebelum tag penutup </body> -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var barisTabel = document.querySelectorAll('table tbody tr');

    barisTabel.forEach(function (baris, indeks) {
      if (indeks % 2 === 0) {
        // Baris genap
        baris.style.backgroundColor = '#ecf0f1';
      } else {
        // Baris ganjil
        baris.style.backgroundColor = '#f9f9f9';
      }
    });
  });
</script>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->