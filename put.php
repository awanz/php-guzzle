<?php
require_once "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://reqres.in/']);
$response = $client->request('PUT', '/api/users/916', ['form_params' => [
     'name' => 'Dina J. R',
     'job' => 'QC',
]]);
echo $response->getBody();