<?php
class Home extends Controller
{
public function index()
{
$data['title'] = 'Home';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/home/index');
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}
