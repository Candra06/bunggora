<?php

class siswa_model{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData()
    {
        $this->db->query('SELECT '. $this->table.'.*, kelas.tingkatan, kelas.nama_kelas FROM '. $this->table.' JOIN kelas ON '. $this->table .'.id_kelas=kelas.id');
        return $this->db->resultSet();
    }

    public function addDataSiswa($data)
    {
        $this->db->Insert(
            ['username' => $data['email'], 
            'password'=> md5($data['password']), 
            'level' => 'siswa', 
            'status' => $data['status']], 'akun');
        
        $id = $this->db->lastInsertId();

        $add = $this->db->Insert([
            'id_akun' => $id,
            'nis' => $data['nis'],
            'nama' => $data['nama'],
            'id_kelas' => $data['id_kelas'],
            'telepon' => $data['telepon'],
            'alamat' => $data['alamat'],
            'status' => $data['status'],
        ], $this->table);        
        
        return $add;
    }
}
?>