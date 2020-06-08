<?php

class report_model{
    private $table = 'report';
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

    public function getListKelas($id)
    {
        $this->db->query('SELECT * FROM siswa s, kelas k WHERE s.id_kelas=k.id AND id_kelas='.$id);
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

    public function addReport($data, $id)
    {
        $add = $this->db->Insert([
            'id_siswa' => $id,
            'keterangan' => $data['report'],
            'create_at' => date('Y-m-d H:i:s'),
            'create_by' => $_SESSION['id_akun'],
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