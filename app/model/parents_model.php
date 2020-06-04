<?php

class parents_model{
    private $table = 'parents';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData()
    {
        $this->db->query('SELECT siswa.nama as nama_siswa, parents.* FROM `parents` JOIN siswa ON parents.id_siswa=siswa.id');
        return $this->db->resultSet();
    }

    public function addDataParents($data)
    {
        $this->db->Insert(
            ['username' => $data['email'], 
            'password'=> md5($data['password']), 
            'level' => 'ortu', 
            'status' => $data['status']
        ], 'akun');
        
        $id = $this->db->lastInsertId();

        $add = $this->db->Insert([
            'id_akun' => $id,
            'id_siswa' => $data['id_siswa'],
            'nama_ortu' => $data['nama_ortu'],
            'telepon' => $data['telepon'],
            'status' => $data['status'],
        ], $this->table);        
        
        return $add;
    }
}
?>