<?php
class hotels{
  
  private $dB;
  private $resource;
  
  function __construct(){
    $this->dB = new DB\SQL('mysql:host='.F3::get('db_host').';port='.F3::get('db_port').';dbname='.F3::get('db_server'),F3::get('db_login'),F3::get('db_password'));
  }
  
  function get(){
    $hotels=new DB\SQL\Mapper($this->dB,'hotels');
    $this->resource=$hotels->find();
  }
  
  function post(){
    
  }
  
  function put(){
    
  }
  
  function delete(){
    
  }
  
  function afterroute(){
    $representation=new representation();
    $representation->output($this->resource,F3::get('REQUEST.format'));
  }
  
}
?>