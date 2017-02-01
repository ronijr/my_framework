<?php

class Users extends Database {


  public function getUser($table){
    return $this->query("SELECT * FROM $table");
  }

  public function num(){
    echo $this->numRows();
  }
}
