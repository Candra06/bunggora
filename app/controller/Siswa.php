<?php

class Siswa extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Siswa';
        $data['siswa'] = $this->model('siswa_model')->getData();
        $this->view('admin/layout/theme');
        $this->view('admin/siswa/index', $data);
        $this->view('admin/layout/footer');
    }
    
    public function add()
    {
        $data['judul'] = 'Tambah Data Siswa';
        $data['kelas'] = $this->model('kelas_model')->getData();
        $this->view('admin/layout/theme');
        $this->view('admin/siswa/add', $data);
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
        if ($this->model('siswa_model')->addDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Siswa');
            exit;
          }else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Siswa');
            exit;
          }
        // var_dump($_POST);
    }


}
?>