<?php

class Mapel extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Mapel';
        $data['nama'] = 'Admin';
        $data['email'] = $_SESSION['email'];
        $data['mapel'] = $this->model('mapel_model')->getData();
        $this->view('admin/layout/theme', $data);
        $this->view('admin/mapel/index', $data);
        $this->view('admin/layout/footer');
    }

    public function mapelSiswa()
    {
        if ($_SESSION['id_akun']!='') {
            $data['judul'] = 'Data Mapel';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $data['mapel'] = $this->model('mapel_model')->mapelBySiswa($_SESSION['id']);
            $this->view('siswa/layout/theme', $data);
            $this->view('siswa/mapel/index', $data);
            $this->view('siswa/layout/footer');
        } else {
            Flasher::setFlash('Anda harus login', 'terlebih dahulu', 'warning');
            header('Location: '. BASEURL . 'Home');
            exit;
        }
    }

    public function detailMapel($id_jadwal)
    {
        if ($_SESSION['id_akun']!='') {
            $data['judul'] = 'List Materi';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $data['jurnal'] = $this->model('jurnal_model')->listJurnal($id_jadwal);
            $this->view('siswa/layout/theme', $data);
            $this->view('siswa/mapel/listJurnal', $data);
            $this->view('siswa/layout/footer');
        } else {
            Flasher::setFlash('Anda harus login', 'terlebih dahulu', 'warning');
            header('Location: '. BASEURL . 'Home');
            exit;
        }
    }

    public function ListMapel()
    {
        $data['judul'] = 'Data Mapel';
        $data['nama'] = $_SESSION['nama_akun'];
        $data['email'] = $_SESSION['email'];
        $data['mapel'] = $this->model('mapel_model')->getDataMapelGuru($_SESSION['id_akun']);
        $this->view('guru/layout/theme', $data);
        $this->view('guru/mapel/index', $data);
        $this->view('guru/layout/footer');
    }
    
    public function add()
    {
        $data['judul'] = 'Tambah Data Mapel';
        $data['nama'] = 'Admin';
        $data['email'] = $_SESSION['email'];
        $this->view('admin/layout/theme', $data);
        $this->view('admin/mapel/add', $data);
        $this->view('admin/layout/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Mapel';
        $data['nama'] = 'Admin';
        $data['email'] = $_SESSION['email'];        
        $data['detail'] = $this->model('mapel_model')->getDataDetail($id);
        $this->view('admin/layout/theme', $data);
        $this->view('admin/mapel/add', $data);
        $this->view('admin/layout/footer');
    }

    public function update($id)
    {
        if ($this->model('mapel_model')->updateDataMapel($_POST, $id) > 0) {
            Flasher::setFlash('Data mapel berhasil', 'diupdate', 'success');
            header('Location: '. BASEURL . 'Mapel');
            exit;
          }else {
            Flasher::setFlash('Data mapel gagal', 'diupdate', 'danger');
            header('Location: '. BASEURL . 'Mapel');
            exit;
        }
    }

    public function store()
    {
        if ($this->model('mapel_model')->addDataMapel($_POST) > 0) {
            Flasher::setFlash('Data mapel berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Mapel');
            exit;
          }else {
            Flasher::setFlash('Data mapel gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Mapel');
            exit;
        }
    }


}
?>