<?php

class Database {
  protected $_host, $_user, $_pass, $_db;
  protected $_link, $_result, $numRows;

  public function __construct(){
    require_once 'app/config/database.php';
    $this->_host = $config['host'];
    $this->_user = $config['user'];
    $this->_pass = $config['pass'];
    $this->_db   = $config['db'];
    $this->_link = new mysqli();
    $this->_link->connect($this->_host, $this->_user, $this->_pass, $this->_db);
    if($this->_link->errno){
      die("Sorry, Somthing problem");
    }
  }

  public function disconnect(){
      $this->_link->close();
  }

  public function query($sql){
      $this->_result = $this->_link->query($sql);
      if($this->_result->num_rows > 1){
        $rows = $this->_result->fetch_all(MYSQLI_ASSOC);
      } else {
        $rows = $this->_result->fetch_assoc();
      }
      return $rows;
  }

  public function numRows(){
        return $this->_result->num_rows;
  }

  public function get(){

  }
}
