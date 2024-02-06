<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form action="<?= BASEURL; ?>/backsite/buku/update" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" value="<?= $data['buku']['judul']; ?>">
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
    <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $data['buku']['foto']; ?>" style="width: 60px;">
  </div>
  <div class="form-group">
    <label>Stok</label>
    <input type="text" class="form-control" placeholder="Masukkan stok" name="stok" value="<?= $data['buku']['stok']; ?>">
  </div>
  <div class="form-group">
    <label>Kategori</label>
    <input type="text" class="form-control" placeholder="Masukkan kategori" name="kategori" value="<?= $data['buku']['kategori']; ?>">
  </div>
  <div class="form-group">
    <label>Rak</label>
    <input type="text" class="form-control" placeholder="Masukkan rak buku" name="rak" value="<?= $data['buku']['rak']; ?>">
  </div>
  <div class="form-group">
    <label>Inventaris</label>
    <input type="text" class="form-control" placeholder="Masukkan inventaris" name="inventaris" value="<?= $data['buku']['inventaris']; ?>">
  </div>
  <div class="form-group">
    <label>Tanggal</label>
    <input type="text" class="form-control" placeholder="Masukkan tanggal" name="tanggal" value="<?= $data['buku']['tanggal']; ?>">
  </div>
  <div class="form-group">
    <label>Pengarang</label>
    <input type="text" class="form-control" placeholder="Masukkan pengarang" name="pengarang" value="<?= $data['buku']['pengarang']; ?>">
  </div>
  <div class="form-group">
    <label>Isbn</label>
    <input type="text" class="form-control" placeholder="Masukkan isbn" name="isbn" value="<?= $data['buku']['isbn']; ?>">
  </div>
  <div class="form-group">
    <label>Klasifikasi</label>
    <input type="text" class="form-control" placeholder="Masukkan klasifikasi" name="klasifikasi" value="<?= $data['buku']['klasifikasi']; ?>">
  </div>
  <div class="form-group">
    <label>Kelas</label>
    <input type="text" class="form-control" placeholder="Masukkan kelas" name="kelas" value="<?= $data['buku']['kelas']; ?>">
  </div>
  <div class="form-group">
    <label>Keterangan</label>
    <input type="text" class="form-control" placeholder="Masukkan keterangan" name="keterangan" value="<?= $data['buku']['keterangan']; ?>">
  </div>
  <div class="form-group">
    <label>Kota</label>
    <input type="text" class="form-control" placeholder="Masukkan kota" name="kota" value="<?= $data['buku']['kota']; ?>">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" placeholder="Masukkan alamat" name="alamat" value="<?= $data['buku']['alamat']; ?>">
  </div>
  <div class="form-group">
    <label>Tahun Terbit</label>
    <input type="text" class="form-control" placeholder="Masukkan tahunterbit" name="tahunterbit" value="<?= $data['buku']['tahunterbit']; ?>">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" placeholder="Masukkan tlp" name="tlp" value="<?= $data['buku']['tlp']; ?>">
  </div>
  <div class="form-group">
    <label>Penerbit</label>
    <input type="text" class="form-control" placeholder="Masukkan penerbit" name="penerbit" value="<?= $data['buku']['penerbit']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="proses">Update</button>
</form>
             
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