<?php


$filename = '../../data/heroes.json';
$id= $_GET['id'];
$heroes = json_decode(file_get_contents($filename),true);
$key = getKey($heroes,$id);
   
   if(isset($key)){
       unset($heroes['heroes'][$key]);
       file_put_contents($filename, json_encode($heroes));
       
   }
   
    
function getKey($heroesArr, $value)
{
   foreach($heroesArr['heroes'] as $key => $hero)
   {
      if ($hero['id'] == $value )
         return $key;
   }
   return false;
}