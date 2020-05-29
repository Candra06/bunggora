<?php
/**
 *
 */
class Guru extends Controller
{

  public function index()
  {
    $data['judul'] = 'Data Guru';
    $data['guru'] = $this->model('guru_model')->getData();
    $this->view('admin/layout/theme');
    $this->view('admin/guru/index', $data);
    $this->view('admin/layout/footer');
  }

  public function add()
  {
    $data['judul'] = 'Tambah Data Guru';
    $this->view('admin/layout/theme');
    $this->view('admin/guru/add', $data);
    $this->view('admin/layout/footer');
  }

  public function  store()
  {
    if ($this->model('guru_model')->addDataGuru($_POST) > 0) {
      header('Location: '. BASEURL . 'Guru');
      exit;
    }
  }


}
 ?>
