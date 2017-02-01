<?php

class About extends Controller{

  public function index(){
    echo "ok";
  }

  public function TestInput(){

    $data = array(


    );
    $this->view('about/about');
  }

  public function inputData(){
      $model = $this->model('users');
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $firstname = $_POST['first_name'];
      $lastname = $_POST['last_name'];
      $email = $_POST['email'];

      if($_POST['submit'] == true){

        if(empty($username) OR empty($password) OR empty($firstname) OR empty($email)){
            $data=array(
                'pesan' => 'Data Masih kosong bro',
            );
            $this->view('about/about', $data);
        }else{
          $data= array(
            'username' => $username,
            'password' => $password,
            'first_name' => $firstname,
            'last_name' => $lastname,
            'email' => $email

          );
          $model->insertUser($data);
          $data_1=array(
            'pesan' => 'sukses bro',
            'result' => ''
          );
          header("Location:".base_url()."home/test");
        }

      }




  }
}
