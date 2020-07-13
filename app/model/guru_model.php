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

    public function getDetail($id)
    {
        $this->db->query('SELECT * FROM guru, akun WHERE guru.id_akun=akun.id AND guru.id='.$id.'');
        return $this->db->single();
    }

    public function editDataGuru($data, $id)
    {
        $add = $this->db->Update([
            'id_akun' => $id,
            'nip' => $data['nip'],
            'nama' => $data['nama'],
            'telepon' => $data['telepon'],
            'alamat' => $data['alamat'],
            'status' => $data['status'],
        ], " WHERE id=$id", 'guru'); 
        
        $akun = $this->db->Update(
            ['username' => $data['email'], 
            'password'=> md5($data['password']), 
            'level' => 'guru', 
            'status' => $data['status']
        ], " WHERE id=".$data['id_akun'] , 'akun');

        return $add;
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
