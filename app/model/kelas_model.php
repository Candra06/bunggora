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

    public function addDataKelas($data)
    {
        $query = "INSERT INTO '.$this->table.'(nis, nama, id_kelas, telepon, alamat, status) VALUES ( :nip, :nama, :id_kelas, :telepon, :alamat, :status)";
        $this->db->query($query);
        $this->db->bind('nip', $data['nis']);
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