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

    public function addDataMapel($data)
    {
        $add = $this->db->Insert([
            'nama_mapel' => $data['mapel'],
            'golongan' => $data['golongan'],
        ], $this->table);        
        
        return $add;
    }
}
?>