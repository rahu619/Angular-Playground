<?php

class Heroes{
private $filename = 'data/heroes.json';

public function GetAll(){
  $json = file_get_contents($filename);  
  $json_data = json_decode($json);
  var_dump($json_data);
}

}


//echo $json;

 