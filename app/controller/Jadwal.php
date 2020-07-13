<?php

class Jadwal extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Jadwal';
        $data['nama'] = 'Admin';
        $data['jadwal'] = $this->model('jadwal_model')->getData();
        $this->view('admin/layout/theme', $data);
        $this->view('admin/jadwal/index', $data);
        $this->view('admin/layout/footer');
    }
    
    public function add()
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login', 'terlebih dahulu', 'success');
            header('Location: '. BASEURL . 'Home');
            exit;
        } else {
            $data['judul'] = 'Tambah Data Jadwal';
            $data['nama'] = 'Admin';
            $data['email'] = $_SESSION['email'];
            $data['mapel'] = $this->model('jadwal_model')->getDetailMengajar();
            $data['kelas'] = $this->model('kelas_model')->getData();
            $this->view('admin/layout/theme', $data);
            $this->view('admin/jadwal/add', $data);
            $this->view('admin/layout/footer');
        }
        
    }

    public function edit($id)
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login', 'terlebih dahulu', 'success');
            header('Location: '. BASEURL . 'Home');
            exit;
        } else {
            $data['judul'] = 'Edit Data Jadwal';
            $data['nama'] = 'Admin';
            $data['email'] = $_SESSION['email'];
            $data['mapel'] = $this->model('jadwal_model')->getDetailMengajar();
            $data['kelas'] = $this->model('kelas_model')->getData();
            $data['detail'] = $this->model('jadwal_model')->getDetailData($id);
            $this->view('admin/layout/theme', $data);
            $this->view('admin/jadwal/add', $data);
            $this->view('admin/layout/footer');
        }
    }

    public function update($id)
    {
        if ($this->model('jadwal_model')->updateDataJadwal($_POST, $id) > 0) {
            Flasher::setFlash('Data jadwal berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Jadwal');
            exit;
          }else {
            Flasher::setFlash('Data jadwal gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Jadwal');
            exit;
          }
    }

    public function store()
    {
        if ($this->model('jadwal_model')->addDataJadwal($_POST) > 0) {
            Flasher::setFlash('Data jadwal berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Jadwal');
            exit;
          }else {
            Flasher::setFlash('Data jadwal gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Jadwal');
            exit;
          }
    }


}
?>