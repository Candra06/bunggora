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
        $this->db->query('SELECT * FROM `jadwal` JOIN kelas ON id_kelas=kelas.id JOIN mapel ON jadwal.id_mapel=mapel.id JOIN guru ON jadwal.id_guru=guru.id');
        return $this->db->resultSet();
    }

    public function addDataJadwal($data)
    {
        $add = $this->db->Insert([
            'id_kelas' => $data['id_kelas'],
            'id_mapel' => $data['id_mapel'],
            'id_guru' => $data['id_guru'],
            'jam' => $data['jam'],
            'hari' => $data['hari'],
        ], $this->table);        
        
        return $add;
    }
}
?>