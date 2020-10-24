<?php
require_once "vendor/autoload.php";
use GuzzleHttp\Client;
 
$fp = fopen('images.jpg', 'wb');
$client = new \GuzzleHttp\Client();
$request = $client->get('https://upload.wikimedia.org/wikipedia/en/a/a9/Example.jpg', ['sink' => $fp]);
fclose($fp);