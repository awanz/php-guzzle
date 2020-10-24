<?php
require_once "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://reqres.in/']);
$response = $client->request('PATCH', '/api/users/916', ['form_params' => [
     'name' => 'Dina J',
     'job' => 'QC',
]]);
echo $response->getBody();