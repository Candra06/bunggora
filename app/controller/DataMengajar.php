<?php

class DataMengajar extends Controller{

    public function index()
    {
        $data['judul'] = 'Data Mengajar';
        $data['nama'] = 'Admin';
        $data['dataMengajar'] = $this->model('jadwal_model')->getDetailMengajar();
        $this->view('admin/layout/theme', $data);
        $this->view('admin/data_mengajar/index', $data);
        $this->view('admin/layout/footer');
    }
    
    public function add()
    {
        $data['judul'] = 'Tambah Data Mengajar';
        $data['nama'] = 'Admin';
        $data['mapel'] = $this->model('mapel_model')->getData();
        $data['guru'] = $this->model('guru_model')->getData();
        $this->view('admin/layout/theme', $data);
        $this->view('admin/data_mengajar/add', $data);
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
        if ($this->model('jadwal_model')->addDataMengajar($_POST) > 0) {
            Flasher::setFlash('Data mengajar berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'DataMengajar');
            exit;
          }else {
            Flasher::setFlash('Data mengajar gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'DataMengajar');
            exit;
          }
    }


}
?>