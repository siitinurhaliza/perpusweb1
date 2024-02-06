<!-- /.content-wrapper -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <?php
      Flasher::Message();
      ?>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengembalian Buku</h3>
        </div>
        <div class="card-body">
          <form action="<?= BASEURL; ?>/backsite/pengembalian/search" method="post">
            <div class="row mb-3">
              <div class="col-lg-6">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" name="key">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                    <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/backsite/pengembalian">Reset</a>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <div class="float-right">
            <a href="<?= BASEURL; ?>/backsite/pengembalian/create" class="btn btn-primary mb-4"><i class="bi bi-bookmark-plus-fill">TAMBAH DATA</i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0
                            0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
              </svg></a>
          </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman </th>
                <th>Tanggal Pengembalian</th>
                <th>Tanggal Dikembalikan</th>
                <th>Jumlah</th>

              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['pengembalian'] as $row) : ?>
                <tr>
                  <td><?= $no; ?></td>

                  <td><?= $row['nama']; ?></td>
                  <td><?= $row['kelas']; ?></td>
                  <td><?= $row['judul']; ?></td>
                  <td><?= $row['tanggalpinjam']; ?></td>
                  <td><?= $row['tanggalkembali']; ?></td>
                  <td><?= $row['kembali']; ?></td>
                  <td><?= $row['jumlah']; ?></td>


                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
          <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

          <!-- Tambahkan skrip berikut di akhir file HTML Anda, tepat sebelum tag penutup </body> -->
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              var barisTabel = document.querySelectorAll('table tbody tr');

              barisTabel.forEach(function(baris, indeks) {
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