<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$filename = '../../data/heroes.json';

$id= $_GET['id'];
$name= $_GET['name'];

$heroes = json_decode(file_get_contents($filename),true);

array_push($heroes['heroes'],array("id"=>$id,"name"=>$name));

file_put_contents($filename, json_encode($heroes));