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
        if ($_SESSION['id_akun'] == '') {
            
            Flasher::setFlash('Anda harus login', 'terlebih dahulu', 'warning');
            header('Location: '. BASEURL . 'Home');
            exit;
              
        } else {
            $data['judul'] = 'Tambah Data Mengajar';
            $data['nama'] = 'Admin';
            $data['email'] = $_SESSION['email'];
            $data['mapel'] = $this->model('mapel_model')->getData();
            $data['guru'] = $this->model('guru_model')->getData();
            $this->view('admin/layout/theme', $data);
            $this->view('admin/data_mengajar/add', $data);
            $this->view('admin/layout/footer');
        }
        
    }

    public function edit($id)
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login', 'terlebih dahulu', 'warning');
            header('Location: '. BASEURL . 'Home');
            exit;
        } else {
            $data['judul'] = 'Edit Data Mengajar';
            $data['nama'] = 'Admin';
            $data['email'] = $_SESSION['email'];
            $data['mapel'] = $this->model('mapel_model')->getData();
            $data['detail'] = $this->model('mapel_model')->getDataMengajar($id);
            $data['guru'] = $this->model('guru_model')->getData();
            $this->view('admin/layout/theme', $data);
            $this->view('admin/data_mengajar/add', $data);
            $this->view('admin/layout/footer');
        }
    }

    public function update($id)
    {
        if ($this->model('jadwal_model')->updateDataMengajar($_POST, $id) > 0) {
            Flasher::setFlash('Data mengajar berhasil', 'diupdate', 'success');
            header('Location: '. BASEURL . 'DataMengajar');
            exit;
          }else {
            Flasher::setFlash('Data mengajar gagal', 'diupdate', 'danger');
            header('Location: '. BASEURL . 'DataMengajar');
            exit;
          }
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