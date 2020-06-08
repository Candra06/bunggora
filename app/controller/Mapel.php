<?php

class Mapel extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Mapel';
        $data['nama'] = 'Admin';
        // $data['email'] = $_SESSION['nama'];
        $data['mapel'] = $this->model('mapel_model')->getData();
        $this->view('admin/layout/theme', $data);
        $this->view('admin/mapel/index', $data);
        $this->view('admin/layout/footer');
    }

    public function mapelSiswa()
    {
        if ($_SESSION['id_akun']) {
            $data['judul'] = 'Data Mapel';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $data['mapel'] = $this->model('mapel_model')->mapelBySiswa($_SESSION['id_akun']);
            $this->view('siswa/layout/theme', $data);
            $this->view('siswa/mapel/index', $data);
            $this->view('siswa/layout/footer');
        } else {
            # code...
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
        $data['judul'] = 'Tambah Data Siswa';
        $data['nama'] = 'Admin';
        // $data['email'] = $_SESSION['email'];
        $this->view('admin/layout/theme', $data);
        $this->view('admin/mapel/add', $data);
        $this->view('admin/layout/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Data Guru';
        $data['guru'] = $this->model('guru_model')->getData();
        $this->view('admin/layout/theme');
        $this->view('admin/guru/index', $data);
        $this->view('admin/layout/footer');
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
        if ($this->model('mapel_model')->addDataMapel($_POST) > 0) {
            Flasher::setFlash('Data mapel berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Mapel');
            exit;
          }else {
            Flasher::setFlash('Data mapel gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Mapel');
            exit;
          }
        // var_dump($_POST);
    }


}
?>