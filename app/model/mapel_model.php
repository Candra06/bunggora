<?php

class mapel_model{
    private $table = 'mapel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData()
    {
        $this->db->query('SELECT * FROM '.$this->table.'');
        return $this->db->resultSet();
    }

    public function getDataMapelGuru($id)
    {
        $this->db->query('SELECT mapel.nama_mapel, mapel.id, jadwal.id_mapel FROM jadwal JOIN mapel ON jadwal.id_mapel=mapel.id WHERE id_guru='.$id.' GROUP BY jadwal.id_mapel,  mapel.id');
        return $this->db->resultSet();
    }

    public function addDataMapel($data)
    {
        $add = $this->db->Insert([
            'nama_mapel' => $data['mapel'],
            'golongan' => $data['golongan'],
        ], $this->table);        
        
        return $add;
    }

    public function mapelBySiswa($id)
    {
        $this->db->query('SELECT DISTINCT(m.nama_mapel), g.nama FROM jadwal j, mapel m, detail_mengajar dm, kelas k, guru g, siswa s WHERE s.id_kelas=j.id_kelas AND j.id_mengajar=dm.id AND dm.id_mapel=m.id AND dm.id_guru=g.id AND s.id='.$id.' GROUP BY j.id');
        return $this->db->resultSet();
    }

    
}
?>