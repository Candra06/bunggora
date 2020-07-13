<?php

class jadwal_model{
    private $table = 'jadwal';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData()
    {
        $this->db->query('SELECT j.id, m.nama_mapel, g.nama, j.hari, j.jam, k.nama_kelas, k.tingkatan  FROM jadwal j, detail_mengajar dm, mapel m, guru g, kelas k WHERE j.id_mengajar=dm.id AND dm.id_mapel=m.id AND dm.id_guru=g.id AND j.id_kelas=k.id');
        return $this->db->resultSet();
    }

    public function getDetailData($id)
    {
        $this->db->query('SELECT j.*, m.id as id_mapel, g.id as id_guru, k.id as id_kelas  FROM jadwal j, detail_mengajar dm, mapel m, guru g, kelas k WHERE j.id_mengajar=dm.id AND dm.id_mapel=m.id AND dm.id_guru=g.id AND j.id_kelas=k.id AND j.id='.$id.'');
        return $this->db->single();
    }

    public function getDetailMengajar()
    {
        $this->db->query('SELECT * FROM `detail_mengajar` JOIN guru ON id_guru=guru.id JOIN mapel ON id_mapel=mapel.id ');
        return $this->db->resultSet();
    }

    public function getHari($id, $guru)
    {
        $this->db->query('SELECT * FROM jadwal j, detail_mengajar dm WHERE j.id_kelas='.$id.' AND j.id_mengajar=dm.id AND dm.id_guru='.$guru.'');
        return $this->db->resultSet();
    }

    public function addDataJadwal($data)
    {
        $add = $this->db->Insert([
            'id_kelas' => $data['id_kelas'],
            'id_mengajar' => $data['id_mapel'],
            'jam' => $data['jam'],
            'hari' => $data['hari'],
        ], $this->table);        
        
        return $add;
    }

    public function updateDataJadwal($data, $id)
    {
        $add = $this->db->Update([
            'id_kelas' => $data['id_kelas'],
            'id_mengajar' => $data['id_mapel'],
            'jam' => $data['jam'],
            'hari' => $data['hari'],
        ], " WHERE id=$id", $this->table);        
        
        return $add;
    }

    public function addDataMengajar($data)
    {
        $add = $this->db->Insert([
            'id_mapel' => $data['id_mapel'],
            'id_guru' => $data['id_guru'],
        ], 'detail_mengajar');        
        
        return $add;
    }

    public function updateDataMengajar($data, $id)
    {
        $add = $this->db->Update([
            'id_mapel' => $data['id_mapel'],
            'id_guru' => $data['id_guru'],
        ], " WHERE id=$id" ,'detail_mengajar');        
        
        return $add;
    }
}
?>