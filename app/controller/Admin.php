<?php
class Admin extends Controller
{

  public function index()
  {
    if ($_SESSION['id_akun'] == '') {
      header('Location: '. BASEURL . 'Home');
      exit;
    }else if($_SESSION['level'] == 'admin'){
      $data['judul'] = 'Dashboard';
      $data['nama'] = 'Admin';
      $data['email'] = $_SESSION['email'];
      $this->view('admin/layout/theme', $data);
      $this->view('admin/index', $data);
      $this->view('admin/layout/footer', $data);
    }else{
      Flasher::setFlash('Harap login sebagai admin', '', 'danger');
      header('Location: '. BASEURL . 'Home');
    }
  }
}
 ?>
