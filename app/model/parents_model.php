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
        $this->db->query('SELECT akun.username, akun.id as id_akun ,siswa.nama as nama_siswa, parents.* FROM `parents` JOIN siswa ON parents.id_siswa=siswa.id JOIN akun ON parents.id_akun=akun.id' );
        return $this->db->resultSet();
    }

    public function getDetailData($id)
    {
        $this->db->query('SELECT akun.username, akun.id as id_akun ,siswa.nama as nama_siswa, parents.* FROM `parents` JOIN siswa ON parents.id_siswa=siswa.id JOIN akun ON parents.id_akun=akun.id WHERE parents.id='.$id );
        return $this->db->single();
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

    public function updateDataParents($data, $id)
    {
        $this->db->Update(
            ['username' => $data['email'], 
            'password'=> md5($data['password']), 
            'level' => 'ortu', 
            'status' => $data['status']
        ], "WHERE id=$data[id_akun]" ,'akun');

        $add = $this->db->Update([
            'id_akun' => $id,
            'id_siswa' => $data['id_siswa'],
            'nama_ortu' => $data['nama_ortu'],
            'telepon' => $data['telepon'],
            'status' => $data['status'],
        ], "WHERE id=$id" ,$this->table);        
        
        return $add;
    }
}
?>