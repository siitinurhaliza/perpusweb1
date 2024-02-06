<?php
class Buku extends Controller
{
    public function index()
    {
        $data['title'] = 'Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/buku/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Buku';
        $data['Buku'] = $this->model('BukuModel')->cariBuku();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/buku/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Buku';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/buku/create');
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function store()
    {
        if (isset($_POST['proses'])) {
            $namaFile = $_FILES['foto']['name'];
            $ukuranFile = $_FILES['foto']['size'];
            $error = $_FILES['foto']['error'];
            $tmpName = $_FILES['foto']['tmp_name'];

            if ($ukuranFile > 1000000) {
                Flasher::setMessage('Gagal', 'disimpan, Ukuran file melebihi 1 MB', 'danger');
                header('location: ' . BASEURL . '/backsite/buku');
                exit;
            }

            if ($error === 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    if ($this->model('BukuModel')->tambahBuku([
                        "foto"   => $namaFileBaru,
                        "judul"   => $_POST['judul'],
                        "stok"   => $_POST['stok'],
                        "kategori"   => $_POST['kategori'],
                        "rak"   => $_POST['rak'],
                        "inventaris"   => $_POST['inventaris'],
                        "tanggal"   => $_POST['tanggal'],
                        "pengarang"   => $_POST['pengarang'],
                        "isbn"   => $_POST['isbn'],
                        "klasifikasi"   => $_POST['klasifikasi'],
                        "kelas"   => $_POST['kelas'],
                        "keterangan"   => $_POST['keterangan'],
                        "kota"   => $_POST['kota'],
                        "alamat"   => $_POST['alamat'],
                        "tahunterbit"   => $_POST['tahunterbit'],
                        "tlp"   => $_POST['tlp'],
                        "penerbit"   => $_POST['penerbit'],


                    ]) > 0) {
                        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                        header('location: ' . BASEURL . '/backsite/buku');
                        exit;
                    }
                }
            }
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/buku');
            exit;
        }
        $data = [
                        "judul"   => $_POST['judul'],
                        "stok"   => $_POST['stok'],
                        "kategori"   => $_POST['kategori'],
                        "rak"   => $_POST['rak'],
                        "inventaris"   => $_POST['inventaris'],
                        "tanggal"   => $_POST['tanggal'],
                        "pengarang"   => $_POST['pengarang'],
                        "isbn"   => $_POST['isbn'],
                        "klasifikasi"   => $_POST['klasifikasi'],
                        "kelas"   => $_POST['kelas'],
                        "keterangan"   => $_POST['keterangan'],
                        "kota"   => $_POST['kota'],
                        "alamat"   => $_POST['alamat'],
                        "tahunterbit"   => $_POST['tahunterbit'],
                        "tlp"   => $_POST['tlp'],
                        "penerbit"   => $_POST['penerbit'],
        ];

        $bukuModel = $this->model('BukuModel');
        $bukuModel->tambahBuku($data);

        // Redirect ke halaman katalog di frontsite setelah menambah buku
        header("Location: " . BASEURL . "/frontsite/katalog");
    }


    public function edit($id)
    {
        $data['title'] = 'Buku';
        $data['buku'] = $this->model('BukuModel')->getBukuById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/buku/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if (isset($_POST['proses'])) {
            $id = $_POST['id'];
            $namaFile = $_FILES['foto']['name'];
            $ukuranFile = $_FILES['foto']['size'];
            $error = $_FILES['foto']['error'];
            $tmpName = $_FILES['foto']['tmp_name'];

            // Cek apakah ada gambar yang diupload
            if ($ukuranFile > 0) {
                // Proses update gambar
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    // Update data anggota dengan foto baru
                    $data = [
                        "id" => $id,
                        "foto" => $namaFileBaru,
                       

                    ];

                    if ($this->model('BukuModel')->updateBuku($data) > 0) {
                        Flasher::setMessage('Berhasil', 'diupdate', 'success');
                        header('location: ' . BASEURL . '/backsite/buku');
                        exit;
                    }
                } else {
                    Flasher::setMessage('Gagal', 'Update foto', 'danger');
                    header('location: ' . BASEURL . '/backsite/buku/edit/' . $id);
                    exit;
                }
            } else {
                // Jika tidak ada gambar yang diupload, update data buku tanpa mengubah foto
                $data = [
                    "id" => $id,
                    "judul"   => $_POST['judul'],
                    "stok"   => $_POST['stok'],
                    "kategori"   => $_POST['kategori'],
                    "rak"   => $_POST['rak'],
                    "inventaris"   => $_POST['inventaris'],
                    "tanggal"   => $_POST['tanggal'],
                    "pengarang"   => $_POST['pengarang'],
                    "isbn"   => $_POST['isbn'],
                    "klasifikasi"   => $_POST['klasifikasi'],
                    "kelas"   => $_POST['kelas'],
                    "keterangan"   => $_POST['keterangan'],
                    "kota"   => $_POST['kota'],
                    "alamat"   => $_POST['alamat'],
                    "tahunterbit"   => $_POST['tahunterbit'],
                    "tlp"   => $_POST['tlp'],
                    "penerbit"   => $_POST['penerbit'],
                    // tambahkan field lain yang perlu diupdate
                ];

                if ($this->model('BukuModel')->updateBuku($data) > 0) {
                    Flasher::setMessage('Berhasil', 'diupdate', 'success');
                    header('location: ' . BASEURL . '/backsite/buku');
                    exit;
                } else {
                    Flasher::setMessage('Gagal', 'diupdate', 'danger');
                    header('location: ' . BASEURL . '/backsite/buku/edit/' . $id);
                    exit;
                }
            }
        }
    }
    public function deploy($id)
    {
        if ($this->model('BukuModel')->deleteBuku($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/buku');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/buku');
            exit;
        }
    }
}
