<?php

class Jurnal extends Controller{

    public function index()
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Home');
            exit;
        } else {
            $data['judul'] = 'Data Jurnal';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $data['jurnal'] = $this->model('jurnal_model')->getData($_SESSION['id_akun']);
            $this->view('guru/layout/theme', $data);
            $this->view('guru/jurnal/index', $data);
            $this->view('guru/layout/footer');
        }
        
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

    public function edit($id)
    {
        $data['judul'] = 'Data Guru';
        $data['guru'] = $this->model('guru_model')->getData();
        $this->view('admin/layout/theme');
        $this->view('admin/guru/index', $data);
        $this->view('admin/layout/footer');
    }

    public function getHari()
    {
        $data = $this->model('jadwal_model')->getHari($_POST['id_kelas'],3);
        echo json_encode($data);
    }

    public function update()
    {
        # code...
    }

    public function delets()
    {
        # code...
    }

    public function store()
    {
        $file = $_FILES['materi'];
        if ($this->model('jurnal_model')->addJurnal($_POST, $file) > 0) {
            Flasher::setFlash('Data jadwal berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Jurnal');
            exit;
          }else {
            Flasher::setFlash('Data jadwal gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Jurnal');
            exit;
          }
        // var_dump($_POST);
    }


}
?>