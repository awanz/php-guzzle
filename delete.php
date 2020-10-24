<?php
require_once "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://reqres.in/']);
$response = $client->request('DELETE', '/api/users/1');
echo $response->getStatusCode(); 