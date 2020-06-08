<?php

class tugas_model{
    private $table = 'tugas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData($id)
    {
        $this->db->query('SELECT * FROM `tugas` t, mapel m, kelas k WHERE t.id_mapel=m.id AND t.id_kelas=k.id AND t.create_by='.$id.'');
        return $this->db->resultSet();
    }

    public function getMapel($id)
    {
        $this->db->query('SELECT m.nama_mapel, m.id FROM detail_mengajar dm, mapel m WHERE dm.id_mapel=m.id AND dm.id_guru='.$id.'');
        return $this->db->resultSet();
    }

    public function getDetailMengajar()
    {
        $this->db->query('SELECT * FROM `detail_mengajar` JOIN guru ON id_guru=guru.id JOIN mapel ON id_mapel=mapel.id ');
        return $this->db->resultSet();
    }

    public function getDetailTugas($id, $akun)
    {
        $this->db->query('SELECT * FROM `tugas` t, mapel m, kelas k WHERE t.id_mapel=m.id AND t.id_kelas=k.id AND t.id='.$id.' AND t.create_by='.$akun.'');
        return $this->db->single();
    }

    public function getListTugas($id)
    {
        $this->db->query('SELECT * FROM tugas t, siswa s WHERE ');
    }

    public function addTugas($data)
    {
        $add = $this->db->Insert([
            'id_kelas' => $data['id_kelas'],
            'id_mapel' => $data['id_mapel'],
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'deadline' => $data['deadline'],
            'type_file' => $data['type'],
            'create_at' => date("Y-m-d H:i:s"),
            'create_by' => $_SESSION['id_akun'],
        ], $this->table);        
        
        return $add;
    }

    public function listDetail($id)
    {
        $this->db->query('SELECT dt.*, s.nama FROM `detail_tugas` dt, siswa s WHERE dt.id_siswa=s.id AND dt.id_tugas='.$id.'');
        return $this->db->resultSet();
    }

    public function updateTugas($data, $id)
    {
        $data = $this->db->Update([
            'id_kelas' => $data['id_kelas'],
            'id_mapel' => $data['id_mapel'],
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'deadline' => $data['deadline'],
            'type_file' => $data['type'],
            'create_at' => date("Y-m-d H:i:s"),
            'create_by' => $_SESSION['id_akun'],
        ]," WHERE id=$id", $this->table);        
        
        return $data;
    }


}
?>