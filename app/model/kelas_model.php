<?php

class kelas_model{
    private $table = 'kelas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getDataDetail($id)
    {
        $this->db->query('SELECT * FROM '. $this->table. ' WHERE id='.$id);
        return $this->db->resultSet();
    }

    public function getListKelas($id)
    {
        $this->db->query('SELECT COUNT(s.nama) as jumlah_siswa, k.tingkatan, k.nama_kelas, k.id  from detail_mengajar dm JOIN (SELECT DISTINCT(id_kelas), id_mengajar FROM jadwal) j ON j.id_mengajar=dm.id JOIN kelas k ON k.id=j.id_kelas JOIN siswa s ON k.id=s.id_kelas WHERE dm.id_guru='.$id.' GROUP BY j.id_kelas');
        return $this->db->resultSet();
    }

    public function listKelas($id)
    {
        $this->db->query('SELECT DISTINCT(k.id), k.nama_kelas, k.tingkatan FROM `jadwal` j, detail_mengajar dm, kelas k WHERE j.id_kelas=k.id AND j.id_mengajar=dm.id AND dm.id_guru='.$id.'');
        return $this->db->resultSet();
    }

    public function getKelas($id)
    {
        $this->db->query('SELECT k.* FROM jadwal j, kelas k, detail_mengajar dm WHERE j.id_mengajar=dm.id AND j.id_kelas=k.id AND dm.id_guru='.$id.' GROUP BY k.id');
        return $this->db->resultSet();
    }

    public function addDataKelas($data)
    {
        $add = $this->db->Insert([
            'nama_kelas' => $data['rombel'],
            'tingkatan' => $data['tingkatan'],
        ], $this->table);        
        
        return $add;
    }

    public function editDataKelas($data,$id)
    {
        $update = $this->db->Update([
            'nama_kelas' => $data['rombel'],
            'tingkatan' => $data['tingkatan'],
        ], " WHERE id=$id", $this->table);        
        
        return $update;
    }
}
?>