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
        $data['judul'] = 'Tambah Data Jadwal';
        $data['nama'] = 'Admin';
        $data['mapel'] = $this->model('jadwal_model')->getDetailMengajar();
        $data['kelas'] = $this->model('kelas_model')->getData();
        $this->view('admin/layout/theme', $data);
        $this->view('admin/jadwal/add', $data);
        $this->view('admin/layout/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Tambah Data Jadwal';
        $data['nama'] = 'Admin';
        $data['mapel'] =  $this->model('jadwal_model')->getData();
        $data['kelas'] =  $this->model('jadwal_model')->getData();
        $this->view('admin/layout/theme', $data);
        $this->view('admin/jadwal/add', $data);
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
        if ($this->model('jadwal_model')->addDataJadwal($_POST) > 0) {
            Flasher::setFlash('Data jadwal berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Jadwal');
            exit;
          }else {
            Flasher::setFlash('Data jadwal gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Jadwal');
            exit;
          }
        // var_dump($_POST);
    }


}
?>