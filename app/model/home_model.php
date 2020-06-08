<?php

class home_model{

  private $table = 'siswa';
  private $table2 = 'akun';
  private $table3 = 'guru';
  private $table4 = 'parent';
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

  public function getDetail($id, $level)
  {
    
    if ($level == 'siswa') {
      $this->db->query('SELECT siswa.*, siswa.id as id_siswa, akun.* FROM siswa JOIN akun ON siswa.id_akun=akun.id WHERE siswa.id_akun=:id AND siswa.status=:status');
      $this->db->bind('id', $id);
      $this->db->bind('status', 'aktif');
      return $this->db->single();
    } else if ($level == 'guru'){
      $this->db->query('SELECT guru.*, akun.* FROM `guru` JOIN akun ON guru.id_akun=akun.id WHERE guru.id_akun=:id AND guru.status=:status');
      $this->db->bind('id', $id);
      $this->db->bind('status', 'aktif');
      return $this->db->single();
    }else if ($level == 'admin'){
      $this->db->query('SELECT * FROM '. $this->table2. ' WHERE id=:id AND level=:level');
      $this->db->bind('id', $id);
      $this->db->bind('level', $level);
      return $this->db->single();
    }else if ($level == 'parent'){
      $this->db->query('SELECT * FROM '. $this->table2. ' WHERE id=:id AND level=:level');
      $this->db->bind('id', $id);
      $this->db->bind('level', $level);
      return $this->db->single();
    }
    
    
  }

  public function loginRequest($data)
  {
    
    $this->db->query('SELECT * FROM '. $this->table2.' WHERE username=:username AND password=:password ');
    $this->db->bind('username', $data['username']);
    $this->db->bind('password', md5($data['password']));
    
    $dt = $this->db->single();
    $res = $this->db->rowCount();
    $respon = [
      $dt,
      $res
    ];
    return $respon;
  }

  
}

 ?>
