<?php
class Profil extends Controller
{
public function index()
{
$data['title'] = 'Profil';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/profil/index');
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}
