<?php
/**
 *
 */
class Home extends Controller{

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['siswa'] = $this->model('home_model')->getData();
    $this->view('tamplate/head');
    $this->view('home/index', $data);
    $this->view('tamplate/footer');
  }

  public function detail($id){
    $data['judul'] = 'Detail';
    $data['detail'] = $this->model('home_model')->getDetail($id);
    $this->view('tamplate/head');
    $this->view('home/detail', $data);
    $this->view('tamplate/footer');
  }

}

 ?>
