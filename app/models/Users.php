<?php

class Users extends Database {


  public function getUser($table){
    return $this->query("SELECT * FROM $table");
  }

  public function num(){
    echo $this->numRows();
  }

  public function insertUser($data){
    $func_get_args = func_get_args();
    $keys = implode(",",(array_keys($func_get_args[0])));
    $values = "'".implode("', '",(array_values($func_get_args[0])))."'";
    return $this->query("INSERT INTO users ($keys) VALUES ($values)");
    
  }
}
