<?php

class home_model{

  private $table = 'siswa';
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
    $this->db->query('SELECT * FROM'. $this->table. 'WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}

 ?>
