<?php
/**
 *
 * 
 */
class Home extends Controller{

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['siswa'] = $this->model('home_model')->getData();
    $this->view('home/index', $data);
  }

  public function login()
  {
    $login = $this->model('home_model')->loginRequest($_POST);
    if ($login[1] > 0) {
      if ($login[0]['status'] == 'aktif') {
        $data = $this->model('home_model')->getDetail($login[0]['id'], $login[0]['level']);
        $_SESSION['nama_akun'] = $data['nama'];
        $_SESSION['id_akun'] = $data['id'];
        $_SESSION['email'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        if ($_SESSION['level'] == 'guru') {
          header('Location: '. BASEURL . 'Backoffice/Guru');
        } else if ($_SESSION['level'] == 'siswa'){
          header('Location: '. BASEURL . 'Backoffice/Siswa');
        } elseif ($_SESSION['level'] == 'ortu') {
          header('Location: '. BASEURL . 'Backoffice/Siswa');
        } else {
          Flasher::setFlash('Level tidak terdefinisi', '', 'danger');
          header('Location: '. BASEURL . 'Home');
        }
        exit;
      } else {
        Flasher::setFlash('Akun anda tidak aktif', '', 'danger');
        header('Location: '. BASEURL . 'Home');
        exit;
      }
    }else {
      Flasher::setFlash('Login Gagal', '', 'danger');
      header('Location: '. BASEURL . 'Home');
      exit;
    }
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
