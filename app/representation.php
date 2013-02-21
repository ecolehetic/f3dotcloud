<?php
class representation{
 
 function output($resource,$format){
    $format=is_null($format)?'json':$format;
    switch($format){
      case 'json':
        header('Content-Type:application/json, charset=UTF-8');
        echo Views::instance()->toJSON($resource,array('id'=>'id','name'=>'name','address'=>'address'));
      break;
      case 'xml':
        
      break;
    }
 }
  
  
}
?>