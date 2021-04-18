<?php

require_once 'vendor/autoload.php';
require_once 'vendor/mashape/unirest-php/src/Unirest.php';
require_once 'config.php';

$headers = array(
  'Accept' => 'application/json'
);

$response = Unirest\Request::get(
  'https://api.trello.com/1/boards/eFOyz7pc/cards',
  $headers,
  $query
);

$responseData = $response->raw_body;
$responseAsArray = json_decode($responseData, true);

print_r($responseData);

?>
