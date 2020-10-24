<?php
require_once "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://reqres.in/']);
$response = $client->request('GET', '/api/users', ['query' => ['page' => '1', "per_page" => 1]]);
echo $response->getBody();