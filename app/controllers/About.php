<?php

class About extends Controller{
  public function index($nama = 'Hadi', $profesi = 'Web Developer', $umur = 22){
    $data['nama'] = $nama;
    $data['profesi'] = $profesi;
    $data['umur'] = $umur;
    $data['judul'] = 'About me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page(){
    $data['judul'] = 'About page';
    $this->view('templates/header', $data);
    $this->view('About/page');
    $this->view('templates/footer');
  }
}