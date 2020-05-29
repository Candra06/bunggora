<?php
class guru_model{
    private $table = 'guru';
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

    public function addDataGuru($data)
    {
        $query = "INSERT INTO ".$this->table."(nip, nama, telepon, alamat, status) VALUES ( :nip, :nama, :telepon, :alamat, :status)";
        $this->db->query($query);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
?>