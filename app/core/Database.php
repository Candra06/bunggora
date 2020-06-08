<?php

/**
 *
 */
class Database{
  private $host = HOST;
  private $user = USER;
  private $pass = PASS;
  private $dbname = DBNAME;

  private $dbh;
  private $stmt;

  public function __construct()
  {
      $dsn = 'mysql:host='. $this->host. ';dbname='.$this->dbname.'';

      $option = [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ];

      try {
        $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
      } catch (PDOException $e) {
        die($e->getMessage());
      }
  }

  public function query($query)
  {
    $this->stmt =$this->dbh->prepare($query);
  }

  public function bind($param, $value,$type=null)
  {
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_INT;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }

    $this->stmt->bindValue($param, $value, $type);
  }

  public function Insert($data, $table = '')
  {
    $q = "INSERT INTO ". ($table == '' ? $this->table : $table) ." (".implode(',', array_keys($data)).") VALUES(:".implode(', :', array_keys($data)).")";
    $this->executeInsert($q, $data);
    return true;
  }

  public function lastInsertId()
  {
    $q = $this->dbh->prepare("SELECT LAST_INSERT_ID()");
    $q->execute();
    $lastID = $q->fetchColumn();
    return $lastID;
  }

  public function Update($data, $where, $table = '') {
    $q = "UPDATE " . ($table == '' ? $this->table : $table) . " SET ";
    $i = 0;

    foreach($data as $v => $d) {
        $q .= " $v = :$v ";
        if(++$i < count($data))
            $q .= ", ";
    }

    $q .= " $where";
    echo $q;
    $this->ExecuteUpdate($q, $data);
    return true;
  }

  public function execute(){
    $this->stmt->execute();
  }

  public function executeInsert($q, $data=[])
  {
    $this->stmt = $this->dbh->prepare($q);
    $this->stmt->execute($data);
  }

  public function resultSet()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function single()
  {
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function rowCount()
  {
    return $this->stmt->rowCount();
  }

  public function ExecuteUpdate($q, $data = []) {
    $this->stmt = $this->dbh->prepare($q);
    $this->stmt->execute($data);
  }
}

 ?>
