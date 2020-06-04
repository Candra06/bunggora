<?php

class Parents extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Wali Murid';
        $data['nama'] = 'Admin';
        // $data['email'] = $_SESSION['nama'];
        $data['wali'] = $this->model('parents_model')->getData();
        $this->view('admin/layout/theme', $data);
        $this->view('admin/parent/index', $data);
        $this->view('admin/layout/footer');
    }
    
    public function add()
    {
        $data['judul'] = 'Tambah Data Wali Murid';
        $data['nama'] = 'Admin';
        $data['siswa'] = $this->model('siswa_model')->getData();
        // $data['email'] = $_SESSION['email'];
        $this->view('admin/layout/theme', $data);
        $this->view('admin/parent/add', $data);
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
        if ($this->model('parents_model')->addDataParents($_POST) > 0) {
            Flasher::setFlash('Data wali murid berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Parents');
            exit;
          }else {
            Flasher::setFlash('Data wali murid gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Parents');
            exit;
          }
        // var_dump($_POST);
    }


}
?>