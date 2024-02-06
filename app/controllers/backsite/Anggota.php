<?php
class Anggota extends Controller
{
    public function index()
    {
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->cariAnggota();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Anggota';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/create');
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
                header('location: ' . BASEURL . '/backsite/Anggota');
                exit;
            }

            if ($error === 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    if ($this->model('AnggotaModel')->tambahAnggota([
                        "foto"   => $namaFileBaru,
                        "nisn"   => $_POST['nisn'],
                        "nama"  => $_POST['nama'],
                        "kelas" => $_POST['kelas'],
                        "jk"  => $_POST['jk'],
                        "alamat"    => $_POST['alamat'],
                    ]) > 0) {
                        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                        header('location: ' . BASEURL . '/backsite/Anggota');
                        exit;
                    }
                }
            }
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/Anggota');
            exit;
        }
    }


    public function edit($id)
    {
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->getAnggotaById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/edit', $data);
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

                    if ($this->model('AnggotaModel')->updateAnggota($data) > 0) {
                        Flasher::setMessage('Berhasil', 'diupdate', 'success');
                        header('location: ' . BASEURL . '/backsite/anggota');
                        exit;
                    }
                } else {
                    Flasher::setMessage('Gagal', 'Update foto', 'danger');
                    header('location: ' . BASEURL . '/backsite/anggota/edit/' . $id);
                    exit;
                }
            } else {
                // Jika tidak ada gambar yang diupload, update data anggota tanpa mengubah foto
                $data = [
                    "id" => $id,
                    "nisn"   => $_POST['nisn'],
                    "nama"  => $_POST['nama'],
                    "kelas" => $_POST['kelas'],
                    "jk"  => $_POST['jk'],
                    "alamat"    => $_POST['alamat'],
                    // tambahkan field lain yang perlu diupdate
                ];

                if ($this->model('AnggotaModel')->updateAnggota($data) > 0) {
                    Flasher::setMessage('Berhasil', 'diupdate', 'success');
                    header('location: ' . BASEURL . '/backsite/anggota');
                    exit;
                } else {
                    Flasher::setMessage('Gagal', 'diupdate', 'danger');
                    header('location: ' . BASEURL . '/backsite/anggota/edit/' . $id);
                    exit;
                }
            }
        }
    }

    public function deploy($id)
    {
        if ($this->model('AnggotaModel')->deleteAnggota($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        }
    }

    public function print($id)
    {
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->getAnggotaById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/cetak', $data);
        $this->view('backsite/templates/script');
    }
}
