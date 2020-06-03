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
        $this->db->Insert(
            ['username' => $data['email'], 
            'password'=> md5($data['password']), 
            'level' => 'guru', 
            'status' => $data['status']], 'akun');
        
        $id = $this->db->lastInsertId();

        $add = $this->db->Insert([
            'id_akun' => $id,
            'nip' => $data['nip'],
            'nama' => $data['nama'],
            'telepon' => $data['telepon'],
            'alamat' => $data['alamat'],
            'status' => $data['status'],
        ], $this->table);        
        
        return $add;
    }
}
?>
