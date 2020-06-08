<?php

class Tugas extends Controller
{
    public function index()
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Tugas');
            exit;
        } else {
            $data['judul'] = 'Data Tugas';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $data['tugas'] = $this->model('tugas_model')->getData($_SESSION['id_akun']);
            $this->view('guru/layout/theme', $data);
            $this->view('guru/tugas/index', $data);
            $this->view('guru/layout/footer');
        }
    }
    
    public function add()
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Tugas');
            exit;
        } else {
            $data['judul'] = 'Tambah Data Jadwal';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['mapel'] = $this->model('tugas_model')->getMapel($_SESSION['id_akun']);
            $data['kelas'] = $this->model('kelas_model')->getKelas($_SESSION['id_akun']);
            $this->view('guru/layout/theme', $data);
            $this->view('guru/tugas/add', $data);
            $this->view('guru/layout/footer');
        }
    }

    public function edit($id)
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Tugas');
            exit;
        } else {
            $data['judul'] = 'Edit Data Tugas';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['mapel'] = $this->model('tugas_model')->getMapel($_SESSION['id_akun']);
            $data['kelas'] = $this->model('kelas_model')->getKelas($_SESSION['id_akun']);
            $data['detail'] = $this->model('tugas_model')->getDetailTugas($id, $_SESSION['id_akun']);
            $this->view('guru/layout/theme', $data);
            $this->view('guru/tugas/add', $data);
            $this->view('guru/layout/footer');
        }
    }

    public function getHari()
    {
        $data = $this->model('jadwal_model')->getHari($_POST['id_kelas'],3);
        echo json_encode($data);
    }

    public function update($id)
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Tugas');
            exit;
        } else {
            if ($this->model('tugas_model')->updateTugas($_POST, $id) > 0) {
                Flasher::setFlash('Data tugas berhasil', 'ditambahkan', 'success');
                header('Location: '. BASEURL . 'Tugas');
                exit;
            }else {
                Flasher::setFlash('Data tugas gagal', 'ditambahkan', 'danger');
                header('Location: '. BASEURL . 'Tugas');
                exit;
            }
        }
    }

    public function detail($id)
    {
        if ($_SESSION['id_akun'] == '') {
            Flasher::setFlash('Anda harus login terlebih dahulu', '', 'warning');
            header('Location: '. BASEURL . 'Tugas');
            exit;
        } else {
            $data['judul'] = 'Detail Data Jadwal';
            $data['nama'] = $_SESSION['nama_akun'];
            $data['email'] = $_SESSION['email'];
            $data['listDetail'] = $this->model('tugas_model')->listDetail($id);
            $data['detail'] = $this->model('tugas_model')->getDetailTugas($id, $_SESSION['id_akun']);
            $this->view('guru/layout/theme', $data);
            $this->view('guru/tugas/detail', $data);
            $this->view('guru/layout/footer');
        }
        
    }

    public function store()
    {
        if ($this->model('tugas_model')->addTugas($_POST) > 0) {
            Flasher::setFlash('Data tugas berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL . 'Tugas');
            exit;
        }else {
            Flasher::setFlash('Data tugas gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . 'Tugas');
            exit;
        }
    }
}

?>