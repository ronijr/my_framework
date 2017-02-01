<?php

class About extends Controller{

  public function index(){
    echo "ok";
  }

  public function TestInput(){
    $app = new App();
    $data = array(

      'base_url' => $app->base_url(),
    );
    $this->view('about/about', $data);
  }
}
