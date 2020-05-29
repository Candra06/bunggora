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
        $query = "INSERT INTO ".$this->table."(nis, nama, id_kelas, telepon, alamat, status) VALUES ( :nis, :nama, :id_kelas, :telepon, :alamat, :status)";
        
        $this->db->query($query);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
?>