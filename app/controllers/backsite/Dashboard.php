<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();

        $data['count_anggota'] = $this->model('AnggotaModel')->countAnggota();
        $data['count_buku'] = $this->model('BukuModel')->countBuku();
        $data['count_peminjaman'] = $this->model('PeminjamanModel')->countPeminjaman();
        $data['count_pengembalian'] = $this->model('PengembalianModel')->countPengembalian();

        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/dashboard/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function peminjaman_year()
    {
        $postData = file_get_contents("php://input");
        $data = json_decode($postData, true);

        if ($data && isset($data['year'])) {
            $year = $data['year'];

            $getByYear = $this->model('PeminjamanModel')->getPeminjamanByYear($year);

            echo json_encode(["result" => $getByYear, "status" => true]);
            exit;
        } else {
            echo json_encode(["result" => [], "status" => false]);
            exit;
        }
    }
}