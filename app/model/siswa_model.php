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

    public function getDetailData($id)
    {
        $this->db->query('SELECT siswa.*, siswa.id as id_siswa, kelas.*, akun.* FROM siswa, kelas, akun WHERE siswa.id_kelas=kelas.id AND siswa.id_akun=akun.id AND siswa.id='.$id);
        return $this->db->single();
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

    public function updateDataSiswa($data, $id)
    {
        $add = $this->db->Update([
            'nis' => $data['nis'],
            'nama' => $data['nama'],
            'id_kelas' => $data['id_kelas'],
            'telepon' => $data['telepon'],
            'alamat' => $data['alamat'],
            'status' => $data['status'],
        ], " WHERE id=$id", 'siswa'); 
        
        $akun = $this->db->Update(
            ['username' => $data['email'], 
            'password'=> md5($data['password']), 
            'level' => 'siswa', 
            'status' => $data['status']
        ], " WHERE id=".$data['id_akun'] , 'akun');

        return $add;
    }
}
?>