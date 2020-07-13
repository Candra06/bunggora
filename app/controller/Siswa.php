<?php

class Siswa extends Controller{

    public function index()
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Siswa');
            exit;
        } else {
            $data['judul'] = 'Data Siswa';
            $data['nama'] = 'Admin';
            $data['siswa'] = $this->model('siswa_model')->getData();
            $this->view('admin/layout/theme', $data);
            $this->view('admin/siswa/index', $data);
            $this->view('admin/layout/footer');
        }
        
    }
    
    public function add()
    {
        if ($_SESSION['id_akun'] != null) {
            $data['judul'] = 'Tambah Data Siswa';
            $data['nama'] = 'Admin';
            $data['email'] = $_SESSION['email'];
            $data['kelas'] = $this->model('kelas_model')->getData();
            $this->view('admin/layout/theme', $data);
            $this->view('admin/siswa/add', $data);
            $this->view('admin/layout/footer');
        } else {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Siswa');
            exit;
        }
        
    }

    public function edit($id)
    {
        if ($_SESSION['id_akun'] != null) {
            $data['judul'] = 'Edit Data Siswa';
            $data['nama'] = 'Admin';
            $data['email'] = $_SESSION['email'];
            $data['kelas'] = $this->model('kelas_model')->getData();
            $data['detail'] = $this->model('siswa_model')->getDetailData($id);
            $this->view('admin/layout/theme', $data);
            $this->view('admin/siswa/add', $data);
            $this->view('admin/layout/footer');
        } else {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Siswa');
            exit;
        }
    }

    public function update($id)
    {
        if ($this->model('siswa_model')->updateDataSiswa($_POST, $id) > 0) {
            // print_r($this->model('siswa_model')->updateDataSiswa($_POST, $id));
            Flasher::setFlash('Data siswa berhasil', 'diupdate', 'danger');
            header('Location: '. BASEURL . 'Siswa');
            exit; 
          }else { 
            Flasher::setFlash('Data siswa gagal', 'diupdate', 'danger');
            header('Location: '. BASEURL . 'Siswa');
            exit;
          }
    }

    public function store()
    {
        if ($this->model('siswa_model')->addDataSiswa($_POST) > 0) {
            Flasher::setFlash('Data siswa berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Siswa');
            exit;
          }else {
            Flasher::setFlash('Data siswa gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Siswa');
            exit;
          }
        // var_dump($_POST);
    }


}
?>