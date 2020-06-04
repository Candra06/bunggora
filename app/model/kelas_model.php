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
        $add = $this->db->Insert([
            'nama_kelas' => $data['rombel'],
            'tingkatan' => $data['tingkatan'],
        ], $this->table);        
        
        return $add;
    }
}
?>