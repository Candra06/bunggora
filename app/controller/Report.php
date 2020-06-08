<?php

class Report extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Report Siswa';
        $data['nama'] = $_SESSION['nama_akun'];
        $data['email'] = $_SESSION['email'];
        $data['kelas'] = $this->model('kelas_model')->listKelas($_SESSION['id_akun']);
        $this->view('guru/layout/theme', $data);
        $this->view('guru/report/index', $data);
        $this->view('guru/layout/footer');
    }
    
    public function add()
    {
        $data['judul'] = 'Tambah Data Jadwal';
        $data['nama'] = 'Admin';
        $data['mapel'] = $this->model('jadwal_model')->getDetailMengajar();
        $data['kelas'] = $this->model('kelas_model')->getKelas($_SESSION['id_akun']);
        $this->view('guru/layout/theme', $data);
        $this->view('guru/jurnal/add', $data);
        $this->view('guru/layout/footer');
    }

    public function detailKelas($idKelas)
    {
        $data['judul'] = 'Data Siswa Kelas';
        $data['nama'] = $_SESSION['nama_akun'];
        $data['email'] = $_SESSION['email'];
        $data['kelas'] = $this->model('report_model')->getListKelas($idKelas, $_SESSION['id_akun']);
        $this->view('guru/layout/theme', $data);
        $this->view('guru/report/detailKelas', $data);
        $this->view('guru/layout/footer');
    }

    public function addReport($id)
    {
        if ($this->model('report_model')->addReport($_POST, $id) > 0) {
            Flasher::setFlash('Data report berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Report');
            exit;
          }else {
            Flasher::setFlash('Data report gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Report');
            exit;
          }
    }

   
}

?>