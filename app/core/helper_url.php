<?php

function base_url(){
    $base_url = (isset($_SERVER['HTTPS'])) ? 'https://' : 'http://';
    $tmpUrl = dirname(__FILE__);
    $tmpUrl = str_replace($_SERVER['DOCUMENT_ROOT'],'/',$tmpUrl);
    $tmpUrl = ltrim($tmpUrl,'/');
    if(strpos($tmpUrl,'/')){
      $tmpUrl = rtrim($tmpUrl,'/');
      $tmpUrl = explode('/', $tmpUrl);
      $tmpUrl = $tmpUrl[0];
    }

    if($tmpUrl !== $_SERVER['HTTP_HOST']){
      $base_url .= $_SERVER['HTTP_HOST'].'/'.$tmpUrl.'/';
    }else{
      $base_url .= $tmpUrl.'/';
    }

    return $base_url;
}
