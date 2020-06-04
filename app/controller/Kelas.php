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
    
    public function add()
    {
        $data['judul'] = 'Data Kelas';
        $data['kelas'] = $this->model('kelas_model')->getData();
        $data['nama'] = 'Admin';
        $this->view('admin/layout/theme', $data);
        $this->view('admin/kelas/add', $data);
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