<?php

require_once 'vendor/autoload.php';
require_once 'vendor/mashape/unirest-php/src/Unirest.php';
require 'config.php';

$ch = curl_init();
$syncDatat = [];
$syncDatay = [];
$headerst = array(
  'Accept' => 'application/json'
);

$responset = Unirest\Request::get(
  'https://api.trello.com/1/boards/eFOyz7pc/cards',
  $headerst,
  $queryt
);

$responsetData = $responset->raw_body;
$responsetAsArray = json_decode($responsetData, true);

foreach($responsetAsArray as $datat) {
    $descriptiont = $datat["desc"];
    $namet = $datat["name"];
    $syncDatat[] = [
        'summary' => $namet,
        'description' => $descriptiont
        ];
}


$responsey = Unirest\Request::get(
  'https://talkad184.myjetbrains.com/youtrack/api/issues?fields=summary,description',
  $headersy
);

$responseyData = $responsey->raw_body;
$responseyAsArray = json_decode($responseyData, true);

foreach($responseyAsArray as $datay) {
    $descriptiony = $datay['description'];
    $namey = $datay['summary'];
    $syncDatay[] = [
        'summary' => $namey,
        'description' => $descriptiony
        ];
};

?>
