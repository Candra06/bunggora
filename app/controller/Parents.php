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
        if ($_SESSION['id_akun'] != null) {
            $data['judul'] = 'Tambah Data Wali Murid';
            $data['nama'] = 'Admin';
            $data['siswa'] = $this->model('siswa_model')->getData();
            $data['email'] = $_SESSION['email'];
            $this->view('admin/layout/theme', $data);
            $this->view('admin/parent/add', $data);
            $this->view('admin/layout/footer');
        } else {
            Flasher::setFlash('Anda harus login', 'terlebih dahulu', 'warning');
            header('Location: '. BASEURL . 'Home');
            exit;
        }
        
    }

    public function edit($id)
    {
        if ($_SESSION['id_akun'] == '' || $_SESSION['id_akun'] == null) {
            Flasher::setFlash('Anda harus login', 'terlebih dahulu', 'warning');
            header('Location: '. BASEURL . 'Home');
            exit;
        } else {
            $data['judul'] = 'Edit Data Wali';
            $data['email'] = $_SESSION['email'];
            $data['nama'] = 'Admin';
            $data['siswa'] = $this->model('siswa_model')->getData();
            $data['detail'] = $this->model('parents_model')->getDetailData($id);
            $this->view('admin/layout/theme', $data);
            $this->view('admin/parent/add', $data);
            $this->view('admin/layout/footer');
        }
        
    }

    public function update($id)
    {
        if ($this->model('parents_model')->updateDataParents($_POST, $id) > 0) {
            Flasher::setFlash('Data wali murid berhasil', 'diupdate', 'success');
            header('Location: '. BASEURL . 'Parents');
            exit;
          }else {
            Flasher::setFlash('Data wali murid gagal', 'diupdate', 'danger');
            header('Location: '. BASEURL . 'Parents');
            exit;
          }
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