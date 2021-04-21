<?php

require_once 'vendor/autoload.php';
require_once 'vendor/mashape/unirest-php/src/Unirest.php';
require 'config.php';
require_once 'debug.php';

print_r($syncDatat);
print_r($syncDatay);

/*$ch = curl_init();

$post = array (
    'project' => array ('id' => "0-1"),
    'summary' => 'test,test',
    'description' => 'testeststs testeststs testeststs testeststs testeststs');

$post = json_encode($post);
curl_setopt($ch, CURLOPT_URL, 'https://talkad184.myjetbrains.com/youtrack/api/issues');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Bearer perm:cm9vdA==.NTEtMA==.tRN0kr0usrlL0ChAftvUAArR7ESq0B';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
var_dump($result);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
*/

?>
