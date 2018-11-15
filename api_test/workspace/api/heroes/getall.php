<?php

  $filename = '../../data/heroes.json';
  $json = file_get_contents($filename);  
  
  exit(json_encode($json));
  // $json_data = json_decode($json);
  // var_dump($json_data);