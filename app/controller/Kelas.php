<?php

class Kelas extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Kelas';
        $data['kelas'] = $this->model('kelas_model')->getData();
        $this->view('admin/layout/theme');
        $this->view('admin/kelas/index', $data);
        $this->view('admin/layout/footer');
    }
    
    public function add()
    {
        $data['judul'] = 'Data Siswa';
        $data['kelas'] = $this->model('kelas_model')->getData();
        $this->view('admin/layout/theme');
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

    public function delets()
    {
        # code...
    }

    public function store()
    {
        # code...
    }
}
?>