<?php
class Portofolio extends Controller
{
public function index()
{
$data['title'] = 'Portofolio';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/portofolio/index');
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}
