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
    $this->view('admin/layout/theme', $data);
    $this->view('admin/guru/index', $data);
    $this->view('admin/layout/footer');
  }

  public function add()
  {
    $data['nama'] = 'Admin';
    $data['judul'] = 'Tambah Data Guru';
    $this->view('admin/layout/theme', $data);
    $this->view('admin/guru/add', $data);
    $this->view('admin/layout/footer');
  }

  public function edit($id)
  {
    $data['nama'] = 'Admin';
    $data['judul'] = 'Tambah Data Guru';
    $data['email'] = $_SESSION['email'];
    $data['detail'] = $this->model('guru_model')->getDetail($id);
    $this->view('admin/layout/theme', $data);
    $this->view('admin/guru/add', $data);
    $this->view('admin/layout/footer');
  }

  public function update($id)
  {
    try {
      $send = $this->model('guru_model')->editDataGuru($_POST, $id);
      $nama = $_POST['nama'];
      
      if ($send) {
        Flasher::setFlash('berhasil', 'dirubah', 'success');
        header('Location: '. BASEURL . 'Guru');
        exit;
      }else{
        Flasher::setFlash('gagal', 'dirubah', 'danger');
        header('Location: '. BASEURL . 'Guru');
        exit;
      }
    } catch (Exception $e) {
        echo "<script>alert('NIP sudah terpakai'); location.href='". BASEURL ."Guru/add';</script>";
      exit();
    }
  }

  public function  store()
  {
    try {
      $send = $this->model('guru_model')->addDataGuru($_POST);
      $nama = $_POST['nama'];
      
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
