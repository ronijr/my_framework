<?php

class Home extends Controller {

  public function __construct(){


  }

  public function index(){
      echo "Home";
  }


  public function test(){
    $model = $this->model('Users');
    $data = array(
            'result' => $model->getUser('users'),
      
          );
    //$data = array('username'=>'Roni');
    $this->view('home/test',$data);
  }
}
