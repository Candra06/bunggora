<?php

class Backoffice extends Controller
{
    public function Guru()
    {
        if ($_SESSION['id_akun'] == '') {
            header('Location: '. BASEURL . 'Home');
            exit;
        }else if($_SESSION['level'] == 'guru'){
            $data['judul'] = 'Dashboard';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $this->view('guru/layout/theme', $data);
            $this->view('guru/index', $data);
            $this->view('guru/layout/footer', $data);
        }else{
            Flasher::setFlash('Harap login sebagai Guru', '', 'danger');
            header('Location: '. BASEURL . 'Home');
        }
    }

    public function Parents()
    {
        if ($_SESSION['id_akun'] == '') {
            header('Location: '. BASEURL . 'Home');
            exit;
        }else if($_SESSION['level'] == 'ortu'){
            $data['judul'] = 'Dashboard';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $this->view('parent/layout/theme', $data);
            $this->view('parent/index', $data);
            $this->view('parent/layout/footer', $data);
        }else{
            Flasher::setFlash('Harap login sebagai Wali Murid', '', 'danger');
            header('Location: '. BASEURL . 'Home');
        }
    }

    public function Siswa()
    {
        if ($_SESSION['id_akun'] == '') {
            header('Location: '. BASEURL . 'Home');
            exit;
        }else if($_SESSION['level'] == 'siswa'){
            $data['judul'] = 'Dashboard';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $this->view('siswa/layout/theme', $data);
            $this->view('siswa/index', $data);
            $this->view('siswa/layout/footer', $data);
        }else{
            Flasher::setFlash('Harap login sebagai Siswa', '', 'danger');
            header('Location: '. BASEURL . 'Home');
        }
    }
}

?>