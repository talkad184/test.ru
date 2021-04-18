<?php

require_once 'vendor/autoload.php';
require_once 'vendor/mashape/unirest-php/src/Unirest.php';
require_once 'config.php';

$syncData = [];
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

foreach($responseAsArray as $data) {
    $description = $data["desc"];
    $name = $data["name"];
    $members = $data["idMembers"];
    $labels = $data["labels"];
    $syncData[] = [
        'name' => $name,
        'description' => $description,
        'members' => $members,
        'labels' => $labels
        ];
}


var_dump($syncData);
die();

?>
