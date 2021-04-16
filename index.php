<?php

$query = array(
  'key' => 'c9d9aecc67c0c4cb32f956ee53667d9b',
  'token' => 'f1d2ce8815509345e78c827988752788ae4536997ea579024de10e18bb4ed2b7'
);

require_once 'vendor/autoload.php';
require_once 'vendor/mashape/unirest-php/src/Unirest.php';

$response = Unirest\Request::get(
  'https://api.trello.com/eFOyz7pc',
  $query
);

var_dump($response)

?>
