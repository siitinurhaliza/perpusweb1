<?php

class Katalog extends Controller
{
    public function index()
    {
        $data['title'] = 'Katalog';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();  
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/templates/header', $data);
        $this->view('frontsite/katalog/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Katalog';
        $data['Buku'] = $this->model('BukuModel')->cariBuku();
        $data['key'] = $_POST['key'];
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/templates/header', $data);
        $this->view('frontsite/katalog/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }
    
}
