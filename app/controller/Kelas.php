<?php

class Kelas extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Kelas';
        $data['kelas'] = $this->model('kelas_model')->getData();
        $data['nama'] = 'Admin';
        $this->view('admin/layout/theme', $data);
        $this->view('admin/kelas/index', $data);
        $this->view('admin/layout/footer');
    }

    public function ListKelas()
    {
        if ($_SESSION['id_akun'] == '' || $_SESSION['level'] != 'guru') {
            Flasher::setFlash('Anda tidak memiliki', 'akses', 'success');
            header('Location: '. BASEURL . 'Home');
            exit;
        } else {
            $data['judul'] = 'Data Kelas';
            $data['kelas'] = $this->model('kelas_model')->getListKelas($_SESSION['id_akun']);
            $data['nama'] = $_SESSION['nama_akun'];
            $this->view('guru/layout/theme', $data);
            $this->view('guru/kelas/index', $data);
            $this->view('guru/layout/footer');
        }
        
    }
    
    public function add()
    {
        $data['judul'] = 'Data Kelas';
        $data['kelas'] = $this->model('kelas_model')->getData();
        $data['nama'] = 'Admin';
        $data['email'] = $_SESSION['email'];
        $this->view('admin/layout/theme', $data);
        $this->view('admin/kelas/add', $data);
        $this->view('admin/layout/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Data Kelas';
        $data['nama'] = 'Admin';
        $data['email'] = $_SESSION['email'];
        $data['detail'] = $this->model('kelas_model')->getDataDetail($id);
        $this->view('admin/layout/theme', $data);
        $this->view('admin/kelas/add', $data);
        $this->view('admin/layout/footer');
    }

    public function update()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }

    public function store()
    {
        if ($this->model('kelas_model')->addDataKelas($_POST) > 0) {
            Flasher::setFlash('Data kelas berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Kelas');
            exit;
          }else {
            Flasher::setFlash('Data kelas gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Kelas');
            exit;
          }
    }
}
?>