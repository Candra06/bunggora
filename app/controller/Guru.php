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
    $data['nama'] = 'Admin';
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
    try {
      $send = $this->model('guru_model')->addDataGuru($_POST);
      
      if ($send) {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: '. BASEURL . 'Guru');
        exit;
      }else{
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('Location: '. BASEURL . 'Guru');
        exit;
      }
    } catch (Exception $e) {
        echo "<script>alert('NIP sudah terpakai'); location.href='". BASEURL ."Guru/add';</script>";
      exit();
    }
  }


}
 ?>
