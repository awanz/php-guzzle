<?php
require_once "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://reqres.in/']);
$response = $client->request(   'POST', 
                                '/api/users', 
                                [
                                    'form_params' =>    [
                                                            'name' => 'Dina',
                                                            'job' => 'QA'
                                                        ]
                                ]
);
echo $response->getBody();